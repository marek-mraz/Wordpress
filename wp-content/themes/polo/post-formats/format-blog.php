<?php
$blog_style     = reactor_option( 'blog_style' );
$excerpt_length = reactor_option( 'excerpt_length' );

$meta_blog_style = reactor_option( 'blog_style', '', 'meta_news_page_options' );
if ( isset( $meta_blog_style ) && ! empty( $meta_blog_style ) && ! ( 'default' === $meta_blog_style ) ) {
	$blog_style = $meta_blog_style;
}
$meta_excerpt_length = reactor_option( 'excerpt_length', '', 'meta_news_page_options' );
if ( isset( $meta_excerpt_length ) && ! empty( $meta_excerpt_length ) ) {
	$excerpt_length = $meta_excerpt_length;
}
$show_comments = comments_open();
?>

<?php if ( 'timeline' === $blog_style ) { ?>
    <li>
    <div class="timeline-block">
<?php } ?>

    <div <?php post_class( 'post-item grid-sizer' ) ?> >
		
		<?php
		if ( 'timeline' === $blog_style ) {
			echo '<div class="polo-feature-image-loop">';
				echo polo_post_category();
				echo polo_do_post_feature( get_the_ID() );
			echo '</div>';
		} elseif ( 'masonry' === $blog_style ) {
			$output = '<div class="polo-feature-image-loop">';
			$output .= polo_post_category();
			if ( has_post_format( 'gallery', get_the_ID() ) ) {

				$output .= polo_do_feature_gallery();

			} elseif ( has_post_format( 'audio', get_the_ID() ) ) {

				$output .= polo_do_feature_audio();

			} elseif ( has_post_format( 'video', get_the_ID() ) ) {

				$output .= '<div class="post-video">';

				$output .= polo_do_feature_video();

				$output .= '</div>';

			} else {
				$output .= polo_do_feature_resized( get_the_ID(), '580', '350' );
			}
			$output .= '</div>';
			polo_render( $output );
		} elseif ( 'thumbnail' === $blog_style ) {
			$output = '<div class="polo-feature-image-loop">';
			$output .= polo_post_category();
			if ( has_post_format( 'gallery', get_the_ID() ) ) {

				$output .= polo_do_feature_gallery( '525', '400' );

			} elseif ( has_post_format( 'audio', get_the_ID() ) ) {

				$output .= polo_do_feature_audio();

			} elseif ( has_post_format( 'video', get_the_ID() ) ) {

				$output .= '<div class="post-video">';

				$output .= polo_do_feature_video();

				$output .= '</div>';

			} else {
				$output .= polo_do_feature_resized( get_the_ID(), '525', '400' );
			}
			$output .= '</div>';
			polo_render( $output );
		} elseif( 'modern' === $blog_style ) {
			?>
			<div class="polo-feature-image-loop">
			<?php
				echo polo_post_category();
				echo polo_do_post_feature( get_the_ID(), 'full' );
			?>
			</div>
			<?php
		} elseif( 'classic' === $blog_style ) {
			?>
			<div class="polo-feature-image-loop">
			<?php
				echo polo_post_category();
				echo polo_do_post_feature( get_the_ID(), 'full' );
			?>
			</div>
			<?php
		} else { 
			?>
			<div class="polo-feature-image-loop">
			<?php
				echo polo_post_category();
				echo polo_do_post_feature( get_the_ID() );
			?>
			</div>
			<?php
		}
		?>
		<?php
		$article_text = polo_post_text( get_the_ID(), $excerpt_length );
		global $allowedposttags;
		?>

        <div class="post-content-details">
	        <?php echo polo_post_meta_loop( $args = array(
		        'show_comments' => $show_comments
	        ) ); ?>

            <div class="post-title">
                <h3>
                    <a href="<?php echo esc_url( get_the_permalink( get_the_ID() ) ) ?>"><?php echo get_the_title( get_the_ID() ); ?></a>
                </h3>
            </div>
			<?php if (  $article_text  ) { ?>
                <div class="post-description">
					<?php echo wp_kses( $article_text, $allowedposttags ); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="text-center"><ul class="pagination pagination-simple">',
						'after'  => '</ul></div>',
					) );
					?>
                    <div class="post-info">
                        <a class="read-more" href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>">
							<?php esc_html_e( 'read more', 'polo' ) ?>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
			<?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>

<?php if ( 'timeline' === $blog_style ) { ?>
    </div>
    </li>
<?php } ?>