<?php
/*
 *Template for single post display
 */
?>

<?php
$inner_pagination       = reactor_option( 'inner_pagination' );
$show_stunning_header   = reactor_option( 'stunning_header_show' );
$show_page_title        = reactor_option( 'show-page-title' );
$stunning_feature_image = reactor_option( 'stunning_feature_image', false );


?>

<?php get_header(); ?>

<?php polo_content_before(); ?>

<section class="content">

    <div class="container">

		<?php polo_set_layout( 'single-main-sidebar', 'single-sidebar-width', true ); ?>

		<?php polo_post_before(); ?>

        <div class="post-item">

			<?php polo_inner_content_before(); ?>

			<?php if ( false == $stunning_feature_image ) {
				echo polo_do_post_feature( get_the_ID() );
			} ?>
			<?php if ( ! $show_stunning_header && 'true' === $show_page_title ) { ?>
                <div class="single-post-title">
					<?php
					$polo_page_title = polo_get_title();
					polo_render( $polo_page_title );
					?>
                </div>
			<?php } ?>

            <div class="post-content-details">

				<?php echo polo_post_meta_single(); ?>

                <div class="post-description">
					<?php
					while ( have_posts() ) : the_post();

						the_content();

						if ( 'prev_next' === $inner_pagination ) {
							$pagination_class = 'pager';
						} else {
							$pagination_class = 'pagination pagination-simple';
						}

						$args = array(
							'before' => '<div class="text-center"><ul class="' . $pagination_class . '">',
							'after'  => '</ul></div>',
						);

						if ( 'prev_next' === $inner_pagination ) {
							$args['next_or_number'] = 'next';
						} else {
							$args['next_or_number'] = 'number';
						}

						wp_link_pages( $args );

					endwhile;
					?>
                </div>
                <!--post-description-->

				<?php polo_post_tags(); ?>

            </div>
            <!--post-content-details-->

			<?php polo_inner_content_after(); ?>

        </div>
        <!--post-item-->

		<?php polo_post_after(); ?>

		<?php polo_set_layout( 'single-main-sidebar', 'single-sidebar-width', false ); ?>

    </div>
    <!--.content-->

</section><!--.content-->

<?php polo_content_after(); ?>

<?php get_footer(); ?>
