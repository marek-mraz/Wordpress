<?php get_header(); ?>

<!-- BANNER SECTION -->
<div class="w-text">
    <div class="inspiro-slider slider-fullscreen dots-creative" id="slider">
        
        <!-- Note: You might want to make the image dynamic later too, 
             but for now, this keeps your current image setup -->
        <div class="slide kenburns" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/full/foto-13.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">
                    
                    <?php if ( is_front_page() ) : ?>
                        
                        <!-- CONTENT FOR MAIN PAGE ONLY -->
                        <h1>Pridaj sa k nám</h1>
                        <p>Ak ťa baví práca s deťmi a chceš pracovať v letnom <a href="https://www.primaleto.sk/" target="_blank" style="text-decoration: underline;" rel="noopener">tábore</a>...</p>
                        <a class="btn" href="<?php echo esc_url( get_permalink(24) ); ?>">Registrácia</a>

                    <?php else : ?>

                        <!-- CONTENT FOR ALL OTHER PAGES (Just the Title) -->
                        <h1><?php the_title(); ?></h1>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php 
while ( have_posts() ) : the_post();
    ?>
    <div class="container" style="padding-top: 100px;">
        <div class="row justify-content-center">
            <div class="content col-lg-9">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php
endwhile;
?>

<?php get_footer(); ?>