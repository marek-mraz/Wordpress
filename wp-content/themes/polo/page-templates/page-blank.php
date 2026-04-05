<?php
/**
 * Template Name: Blank Page
 *
 */

$post_meta   = get_post_meta( get_the_ID(), 'blank_page_options', true );
$show_footer = isset( $post_meta['blank_page_footer'] ) ? $post_meta['blank_page_footer'] : false;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>

<?php
$preloader_data = polo_theme_preloader();
?>

<body <?php body_class(); echo apply_filters( 'polo_preloader_data', $preloader_data ); ?> >
<?php wp_body_open(); ?>
<!-- WRAPPER -->
<div class="wrapper">

    <section class="p-t-0 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
					<?php while ( have_posts() ): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

	<?php if ( $show_footer ){
		get_footer();
	} else { ?>
</div>
<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
<?php } ?>



