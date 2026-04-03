<?php
/**
 * Plugin Name: my-plugin-env
 * Description: Injects environment variables into the plugin settings.
 */

// 1. Helper function to find the variable anywhere
function get_env_value($key) {
    if (getenv($key)) return getenv($key);
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    return false;
}

// 2. Define Constants
// This locks the fields in the WP Admin UI (greys them out)
if (get_env_value('OIDC_CLIENT_ID')) {
    if (!defined('OIDC_CLIENT_ID')) define('OIDC_CLIENT_ID', get_env_value('OIDC_CLIENT_ID'));
    if (!defined('OIDC_CLIENT_SECRET')) define('OIDC_CLIENT_SECRET', get_env_value('OIDC_CLIENT_SECRET'));
    if (!defined('OIDC_CLIENT_SCOPE')) define('OIDC_CLIENT_SCOPE', get_env_value('OIDC_SCOPE'));
    if (!defined('OIDC_ENDPOINT_LOGIN_URL')) define('OIDC_ENDPOINT_LOGIN_URL', get_env_value('OIDC_ENDPOINT_LOGIN'));
    if (!defined('OIDC_ENDPOINT_USERINFO_URL')) define('OIDC_ENDPOINT_USERINFO_URL', get_env_value('OIDC_ENDPOINT_USERINFO'));
    if (!defined('OIDC_ENDPOINT_TOKEN_URL')) define('OIDC_ENDPOINT_TOKEN_URL', get_env_value('OIDC_ENDPOINT_TOKEN'));
    if (!defined('OIDC_ENDPOINT_LOGOUT_URL')) define('OIDC_ENDPOINT_LOGOUT_URL', get_env_value('OIDC_ENDPOINT_LOGOUT'));
    
    // Lock boolean settings if defined
    if (!defined('OIDC_LINK_EXISTING_USERS')) define('OIDC_LINK_EXISTING_USERS', get_env_value('OIDC_LINK_EXISTING_USERS') === 'true');
    if (!defined('OIDC_CREATE_IF_DOES_NOT_EXIST')) define('OIDC_CREATE_IF_DOES_NOT_EXIST', get_env_value('OIDC_CREATE_IF_NOT_EXISTS') === 'true');
    if (!defined('OIDC_REDIRECT_USER_BACK')) define('OIDC_REDIRECT_USER_BACK', get_env_value('OIDC_REDIRECT_BACK') === 'true');
}

// 3. Inject Values into the Settings Object
add_filter('openid-connect-generic-settings', 'oidc_inject_settings');

function oidc_inject_settings($settings) {

    // If we can't find the Client ID, return the object untouched to prevent errors
    if (!get_env_value('OIDC_CLIENT_ID')) {
        return $settings;
    }

    // --- KEY CHANGE: Use -> instead of [''] ---

    $settings->client_id       = get_env_value('OIDC_CLIENT_ID');
    $settings->client_secret   = get_env_value('OIDC_CLIENT_SECRET');
    $settings->scope           = get_env_value('OIDC_SCOPE');
    
    $settings->endpoint_login       = get_env_value('OIDC_ENDPOINT_LOGIN');
    $settings->endpoint_userinfo    = get_env_value('OIDC_ENDPOINT_USERINFO');
    $settings->endpoint_token       = get_env_value('OIDC_ENDPOINT_TOKEN');
    $settings->endpoint_end_session = get_env_value('OIDC_ENDPOINT_LOGOUT');

    $settings->identity_key       = get_env_value('OIDC_IDENTITY_KEY');
    $settings->nickname_key       = get_env_value('OIDC_NICKNAME_KEY');
    $settings->email_format       = get_env_value('OIDC_EMAIL_FORMAT');
    $settings->displayname_format = get_env_value('OIDC_DISPLAYNAME_FORMAT');

    // Handle Booleans
    $settings->link_existing_users      = get_env_value('OIDC_LINK_EXISTING_USERS') === 'true' ? 1 : 0;
    $settings->create_if_does_not_exist = get_env_value('OIDC_CREATE_IF_NOT_EXISTS') === 'true' ? 1 : 0;
    $settings->redirect_user_back       = get_env_value('OIDC_REDIRECT_BACK') === 'true' ? 1 : 0;
    $settings->identify_with_username   = get_env_value('OIDC_IDENTIFY_WITH_USERNAME') === 'true' ? 1 : 0;
    $settings->refresh_token_enable     = get_env_value('OIDC_ENABLE_REFRESH_TOKEN') === 'true' ? 1 : 0;

    $settings->login_type = 'button';
    $settings->http_request_timeout = 5;
    $settings->no_sslverify = 0;

    return $settings;
}


add_action( 'openid-connect-generic-update-user-using-current-claim', 'oidc_assign_roles_hierarchy', 10, 2 );

function oidc_assign_roles_hierarchy( $user, $user_claim ) {
    
    // --- SETTINGS: Define your Keycloak Role Names here ---
    $role_for_admin  = 'admin';   // Create a role named "admin" in Keycloak
    $role_for_editor = 'editor';  // Create a role named "editor" in Keycloak
    $client_id       = 'animatorkysk_prod';
    // -----------------------------------------------------

    // Initialize list to hold all roles found
    $all_found_roles = [];

    // 1. Check custom mapped 'roles' claim
    if ( ! empty( $user_claim['roles'] ) ) {
        $data = $user_claim['roles'];
        if ( is_string( $data ) ) $data = array( $data );
        $all_found_roles = array_merge( $all_found_roles, $data );
    }

    // 2. Check standard 'realm_access' (Realm Roles)
    if ( ! empty( $user_claim['realm_access']['roles'] ) ) {
        $all_found_roles = array_merge( $all_found_roles, $user_claim['realm_access']['roles'] );
    }

    // 3. Check 'resource_access' (Client Roles)
    if ( ! empty( $user_claim['resource_access'][ $client_id ]['roles'] ) ) {
        $all_found_roles = array_merge( $all_found_roles, $user_claim['resource_access'][ $client_id ]['roles'] );
    }

    // --- DEBUG LOGGING ---
    error_log( '=== OIDC ROLE CHECK FOR: ' . $user->user_login . ' ===' );
    error_log( 'Found Roles: ' . print_r( $all_found_roles, true ) );
    // ---------------------

    // 4. Assign WordPress Role (Hierarchy: Admin > Editor > Subscriber)
    
    // CHECK FOR ADMIN
    if ( in_array( $role_for_admin, $all_found_roles ) ) {
        error_log( 'OIDC MATCH: Found "' . $role_for_admin . '". Setting role to ADMINISTRATOR.' );
        $user->set_role( 'administrator' );
    } 
    // CHECK FOR EDITOR
    elseif ( in_array( $role_for_editor, $all_found_roles ) ) {
        error_log( 'OIDC MATCH: Found "' . $role_for_editor . '". Setting role to EDITOR.' );
        $user->set_role( 'editor' );
    } 
    // DEFAULT
    else {
        error_log( 'OIDC: No matching roles found. Setting role to SUBSCRIBER.' );
        $user->set_role( 'subscriber' );
    }
}