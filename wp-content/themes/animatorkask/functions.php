<?php
function animatorka_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'animatorka' )
        )
    );
}
add_action( 'init', 'animatorka_register_menus' );

function custom_folder_gallery_shortcode() {
    // 1. Get paths
    $theme_path = get_template_directory();
    $theme_url  = get_template_directory_uri();
    $dir_path   = $theme_path . '/assets/images/sm/'; 
    $url_sm     = $theme_url . '/assets/images/sm/';
    $url_full   = $theme_url . '/assets/images/full/';

    // 2. Check directory
    if ( ! is_dir( $dir_path ) ) {
        return '<p style="color:red;">Error: Directory not found.</p>';
    }

    // 3. Get images
    $images = glob( $dir_path . "*.jpg" );

    if ( empty( $images ) ) {
        return '<p>No images found.</p>';
    }

    ob_start(); 
    ?>
    
    <div class="container">
        <h2 class="text-center pb-2">Galéria</h2>
        
        <!-- CHANGED CLASS NAME to 'custom-auto-grid' to stop Theme JS conflict -->
        <div class="custom-auto-grid" data-lightbox="gallery">
            
            <?php foreach ( $images as $image_path ) : 
                $filename = basename( $image_path ); 
            ?>
                <!-- CHANGED CLASS NAME to 'custom-grid-item' -->
                <div class="custom-grid-item">
                    <a class="custom-hover-zoom" href="<?php echo $url_full . $filename; ?>" data-lightbox="gallery-image"> 
                        <img src="<?php echo $url_sm . $filename; ?>" alt="<?php echo esc_attr( $filename ); ?>" loading="lazy"> 
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <?php
    return ob_get_clean();
}
add_shortcode( 'folder_gallery', 'custom_folder_gallery_shortcode' );