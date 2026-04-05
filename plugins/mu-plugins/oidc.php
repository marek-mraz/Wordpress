<?php
/**
 * Plugin Name: mu-plugins
 * Description: Injects environment variables into the plugin settings.
 */

function oidc_log($message) {
    $ts = date('Y-m-d H:i:s');
    $line = "[{$ts}] [oidc-mu-plugin] {$message}" . PHP_EOL;
    file_put_contents('php://stderr', $line);
}

// 1. Helper function to find the variable anywhere
function get_env_value($key) {
    if (getenv($key)) return getenv($key);
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    return false;
}

oidc_log('mu-plugin loaded');

// 2. Define Constants
// This locks the fields in the WP Admin UI (greys them out)
if (get_env_value('OIDC_CLIENT_ID')) {
    oidc_log('OIDC_CLIENT_ID found: ' . get_env_value('OIDC_CLIENT_ID'));
    oidc_log('OIDC_ENDPOINT_LOGIN: ' . (get_env_value('OIDC_ENDPOINT_LOGIN') ?: '(not set)'));
    oidc_log('OIDC_ENDPOINT_TOKEN: ' . (get_env_value('OIDC_ENDPOINT_TOKEN') ?: '(not set)'));
    oidc_log('OIDC_ENDPOINT_USERINFO: ' . (get_env_value('OIDC_ENDPOINT_USERINFO') ?: '(not set)'));
    oidc_log('OIDC_ENDPOINT_LOGOUT: ' . (get_env_value('OIDC_ENDPOINT_LOGOUT') ?: '(not set)'));
    oidc_log('OIDC_JWKS_URI: ' . (get_env_value('OIDC_JWKS_URI') ?: '(not set)'));
    oidc_log('OIDC_ISSUER: ' . (get_env_value('OIDC_ISSUER') ?: '(not set)'));

    if (!defined('OIDC_CLIENT_ID')) define('OIDC_CLIENT_ID', get_env_value('OIDC_CLIENT_ID'));
    if (!defined('OIDC_CLIENT_SECRET')) define('OIDC_CLIENT_SECRET', get_env_value('OIDC_CLIENT_SECRET'));
    if (!defined('OIDC_CLIENT_SCOPE')) define('OIDC_CLIENT_SCOPE', get_env_value('OIDC_SCOPE'));
    if (!defined('OIDC_ENDPOINT_LOGIN_URL')) define('OIDC_ENDPOINT_LOGIN_URL', get_env_value('OIDC_ENDPOINT_LOGIN'));
    if (!defined('OIDC_ENDPOINT_USERINFO_URL')) define('OIDC_ENDPOINT_USERINFO_URL', get_env_value('OIDC_ENDPOINT_USERINFO'));
    if (!defined('OIDC_ENDPOINT_TOKEN_URL')) define('OIDC_ENDPOINT_TOKEN_URL', get_env_value('OIDC_ENDPOINT_TOKEN'));
    if (!defined('OIDC_ENDPOINT_LOGOUT_URL')) define('OIDC_ENDPOINT_LOGOUT_URL', get_env_value('OIDC_ENDPOINT_LOGOUT'));
    if (!defined('OIDC_JWKS_URI')) define('OIDC_JWKS_URI', get_env_value('OIDC_JWKS_URI'));
    if (!defined('OIDC_ISSUER')) define('OIDC_ISSUER', get_env_value('OIDC_ISSUER'));
    
    // Lock boolean settings if defined
    if (!defined('OIDC_LINK_EXISTING_USERS')) define('OIDC_LINK_EXISTING_USERS', get_env_value('OIDC_LINK_EXISTING_USERS') === 'true');
    if (!defined('OIDC_CREATE_IF_DOES_NOT_EXIST')) define('OIDC_CREATE_IF_DOES_NOT_EXIST', get_env_value('OIDC_CREATE_IF_NOT_EXISTS') === 'true');
    if (!defined('OIDC_REDIRECT_USER_BACK')) define('OIDC_REDIRECT_USER_BACK', get_env_value('OIDC_REDIRECT_BACK') === 'true');
    if (!defined('OIDC_ENFORCE_PRIVACY')) define('OIDC_ENFORCE_PRIVACY', get_env_value('OIDC_ENFORCE_PRIVACY') === 'true');
    oidc_log('Constants defined successfully');
} else {
    oidc_log('WARNING: OIDC_CLIENT_ID not found in env — OIDC disabled');
}

// Allow WordPress to make HTTP requests to internal Kubernetes services (.local / private IPs)
add_filter('http_request_host_is_external', function($allow, $host, $url) {
    if (strpos($host, '.local') !== false || strpos($host, 'keycloak') !== false) {
        return true;
    }
    return $allow;
}, 10, 3);

add_filter('http_request_args', function($args, $url) {
    $args['reject_unsafe_urls'] = false;
    return $args;
}, 10, 2);

// 3. Inject Values into the Settings Object via WP Core Option Filters
add_filter('option_openid_connect_generic_settings', 'oidc_inject_settings');
add_filter('default_option_openid_connect_generic_settings', 'oidc_inject_settings');

function oidc_inject_settings($settings) {
    if (!is_array($settings)) {
        $settings = array();
    }

    if (!get_env_value('OIDC_CLIENT_ID')) {
        oidc_log('oidc_inject_settings: OIDC_CLIENT_ID missing, returning defaults');
        return $settings;
    }

    oidc_log('oidc_inject_settings: injecting env vars into settings');

    $settings['client_id']       = get_env_value('OIDC_CLIENT_ID');
    $settings['client_secret']   = get_env_value('OIDC_CLIENT_SECRET');
    $settings['scope']           = get_env_value('OIDC_SCOPE');
    
    $settings['endpoint_login']       = get_env_value('OIDC_ENDPOINT_LOGIN');
    $settings['endpoint_userinfo']    = get_env_value('OIDC_ENDPOINT_USERINFO');
    $settings['endpoint_token']       = get_env_value('OIDC_ENDPOINT_TOKEN');
    $settings['endpoint_end_session'] = get_env_value('OIDC_ENDPOINT_LOGOUT');
    
    if (get_env_value('OIDC_JWKS_URI')) {
        $settings['jwks_uri'] = get_env_value('OIDC_JWKS_URI');
        $settings['endpoint_jwks'] = get_env_value('OIDC_JWKS_URI');
    }
    if (get_env_value('OIDC_ISSUER')) {
        $settings['issuer'] = get_env_value('OIDC_ISSUER');
    }

    $settings['identity_key']       = get_env_value('OIDC_IDENTITY_KEY');
    $settings['nickname_key']       = get_env_value('OIDC_NICKNAME_KEY');
    $settings['email_format']       = get_env_value('OIDC_EMAIL_FORMAT');
    $settings['displayname_format'] = get_env_value('OIDC_DISPLAYNAME_FORMAT');

    // Handle Booleans
    $settings['link_existing_users']      = get_env_value('OIDC_LINK_EXISTING_USERS') === 'true' ? 1 : 0;
    $settings['create_if_does_not_exist'] = get_env_value('OIDC_CREATE_IF_NOT_EXISTS') === 'true' ? 1 : 0;
    $settings['redirect_user_back']       = get_env_value('OIDC_REDIRECT_BACK') === 'true' ? 1 : 0;
    $settings['identify_with_username']   = get_env_value('OIDC_IDENTIFY_WITH_USERNAME') === 'true' ? 1 : 0;
    $settings['token_refresh_enable']     = get_env_value('OIDC_ENABLE_REFRESH_TOKEN') === 'true' ? 1 : 0;
    $settings['enforce_privacy']          = get_env_value('OIDC_ENFORCE_PRIVACY') === 'true' ? 1 : 0;

    $settings['login_type'] = 'button';
    $settings['http_request_timeout'] = 15;
    $settings['no_sslverify'] = 0;
    $settings['allow_internal_idp'] = 1;

    return $settings;
}


add_action( 'openid-connect-generic-update-user-using-current-claim', 'oidc_assign_roles_hierarchy', 10, 2 );

function oidc_assign_roles_hierarchy( $user, $user_claim ) {
    
    // --- SETTINGS: Define your Keycloak Role Names here ---
    $role_for_admin  = 'admin';   // Create a role named "admin" in Keycloak
    $role_for_editor = 'editor';  // Create a role named "editor" in Keycloak
    $client_id       = get_env_value('OIDC_CLIENT_ID') ? get_env_value('OIDC_CLIENT_ID') : 'animatorkysk_prod';
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

    oidc_log( '=== ROLE CHECK FOR: ' . $user->user_login . ' ===' );
    oidc_log( 'Client ID used: ' . $client_id );
    oidc_log( 'Roles claim (raw): ' . json_encode( $user_claim['roles'] ?? '(absent)' ) );
    oidc_log( 'realm_access.roles: ' . json_encode( $user_claim['realm_access']['roles'] ?? '(absent)' ) );
    oidc_log( 'resource_access.' . $client_id . '.roles: ' . json_encode( $user_claim['resource_access'][ $client_id ]['roles'] ?? '(absent)' ) );
    oidc_log( 'All found roles: ' . json_encode( $all_found_roles ) );

    // 4. Assign WordPress Role (Hierarchy: Admin > Editor > Subscriber)
    if ( in_array( $role_for_admin, $all_found_roles ) ) {
        oidc_log( 'MATCH: "' . $role_for_admin . '" → setting ADMINISTRATOR' );
        $user->set_role( 'administrator' );
    } 
    elseif ( in_array( $role_for_editor, $all_found_roles ) ) {
        oidc_log( 'MATCH: "' . $role_for_editor . '" → setting EDITOR' );
        $user->set_role( 'editor' );
    } 
    else {
        oidc_log( 'No matching roles → setting SUBSCRIBER' );
        $user->set_role( 'subscriber' );
    }
}