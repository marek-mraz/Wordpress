<?php

add_filter('advanced_import_demo_lists', 'polo_demo_import_lists');

function polo_demo_import_lists(){

    $demo_url = 'http://up.crumina.net/demo-data/polo/';

    $demo_lists = array(
        'сorporate_1' =>array(
           'title' => esc_html__( 'Corporate v1', 'polo' ),/*Title*/
           'is_pro' => false,/*Is Premium*/
           'keywords' => array( 'corporate' ),
           'categories' => array( 'corporate' ),/*Categories*/
            'template_url' => array(
                'content' => $demo_url . 'corporate/content.json',/*Full URL Path to content.json*/
                'options' => $demo_url . 'corporate/options.json',/*Full URL Path to options.json*/
                'widgets' => $demo_url . 'corporate/widgets.json',/*Full URL Path to widgets.json*/
                'settings' => $demo_url . 'corporate/settings.txt',
                'slider_rev' => 'corporate',
                'home_page' => 'Corporate v1'
            ),
           'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v1.jpg',/*Full URL Path to demo screenshot image*/
           'demo_url' => '#',/*Full URL Path to Live Demo*/
        ),
        'сorporate_2' =>array(
            'title' => esc_html__( 'Corporate v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                  'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v2.jpg',
            'demo_url' => '#',
        ),
        'сorporate_3' =>array(
            'title' => esc_html__( 'Corporate v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                  'content' => $demo_url . 'corporate/content.json',
                  'options' => $demo_url . 'corporate/options.json',
                  'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                  'slider_rev' => 'corporate',
                  'home_page' => 'Corporate v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v3.jpg',
            'demo_url' => '#',
        ),
        'сorporate_4' =>array(
            'title' => esc_html__( 'Corporate v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v4.jpg',
            'demo_url' => '#',
        ),
        'сorporate_5' =>array(
            'title' => esc_html__( 'Corporate v5', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v5'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v5.jpg',
            'demo_url' => '#',
        ),
        'сorporate_6' =>array(
            'title' => esc_html__( 'Corporate v6', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v6'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v6.jpg',
            'demo_url' => '#',
        ),
        'сorporate_7' =>array(
            'title' => esc_html__( 'Corporate v7', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v7'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v7.jpg',
            'demo_url' => '#',
        ),
        'сorporate_8' =>array(
            'title' => esc_html__( 'Corporate v8', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Corporate v8'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/corporate-v8.jpg',
            'demo_url' => '#',
        ),
        'сorporate_9' =>array(
            'title' => esc_html__( 'Home corporate', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Home corporate'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/home-corporate.jpg',
            'demo_url' => '#',
        ),
        'сorporate_10' =>array(
            'title' => esc_html__( 'Home Business', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'corporate' ),
            'categories' => array( 'corporate' ),
               'template_url' => array(
                   'content' => $demo_url . 'corporate/content.json',
                   'options' => $demo_url . 'corporate/options.json',
                   'widgets' => $demo_url . 'corporate/widgets.json',
                  'settings' => $demo_url . 'corporate/settings.txt',
                   'slider_rev' => 'corporate',
                   'home_page' => 'Home business'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/corporate/business.jpg',
            'demo_url' => '#',
        ),
        'creative_1' =>array(
            'title' => esc_html__( 'Creative 1', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'creative' ),
            'categories' => array( 'creative' ),
               'template_url' => array(
                   'content' => $demo_url . 'creative/content.json',
                   'options' => $demo_url . 'creative/options.json',
                   'widgets' => $demo_url . 'creative/widgets.json',
                  'settings' => $demo_url . 'creative/settings.txt',
                   'slider_rev' => 'creative',
                   'home_page' => 'Creavite v1'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/creative/creative-v1.jpg',
            'demo_url' => '#',
        ),
        'creative_2' =>array(
            'title' => esc_html__( 'Creative 2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'creative' ),
            'categories' => array( 'creative' ),
               'template_url' => array(
                   'content' => $demo_url . 'creative/content.json',
                   'options' => $demo_url . 'creative/options.json',
                   'widgets' => $demo_url . 'creative/widgets.json',
                  'settings' => $demo_url . 'creative/settings.txt',
                   'slider_rev' => 'creative',
                   'home_page' => 'Creative v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/creative/creative-v2.jpg',
            'demo_url' => '#',
        ),
        'creative_3' =>array(
            'title' => esc_html__( 'Creative 3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'creative' ),
            'categories' => array( 'creative' ),
               'template_url' => array(
                   'content' => $demo_url . 'creative/content.json',
                   'options' => $demo_url . 'creative/options.json',
                   'widgets' => $demo_url . 'creative/widgets.json',
                  'settings' => $demo_url . 'creative/settings.txt',
                   'slider_rev' => 'creative',
                   'home_page' => 'Creative v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/creative/creative-v3.jpg',
            'demo_url' => '#',
        ),
        'creative_4' =>array(
            'title' => esc_html__( 'Creative 4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'creative' ),
            'categories' => array( 'creative' ),
               'template_url' => array(
                   'content' => $demo_url . 'creative/content.json',
                   'options' => $demo_url . 'creative/options.json',
                   'widgets' => $demo_url . 'creative/widgets.json',
                  'settings' => $demo_url . 'creative/settings.txt',
                   'slider_rev' => 'creative',
                   'home_page' => 'Creative v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/creative/creative-v4.jpg',
            'demo_url' => '#',
        ),
        'creative_5' =>array(
            'title' => esc_html__( 'Creative 5', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'creative' ),
            'categories' => array( 'creative' ),
               'template_url' => array(
                   'content' => $demo_url . 'creative/content.json',
                   'options' => $demo_url . 'creative/options.json',
                   'widgets' => $demo_url . 'creative/widgets.json',
                  'settings' => $demo_url . 'creative/settings.txt',
                   'slider_rev' => 'creative',
                   'home_page' => 'Creative v5'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/creative/creative-v5.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_1' =>array(
            'title' => esc_html__( 'Youtube video background', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Youtube video background'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/video-background.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_2' =>array(
            'title' => esc_html__( 'Fullscreen parallax', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Fullscreen parallax'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/fullscreen-parallax.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_3' =>array(
            'title' => esc_html__( 'Image carousel', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Image carousel'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/image-carousel.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_4' =>array(
            'title' => esc_html__( 'Parallax', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Parallax'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/parallax.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_5' =>array(
            'title' => esc_html__( 'Parallax dark', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Parallax dark'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/parallax-dark.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_6' =>array(
            'title' => esc_html__( 'Parallax dark fullwidth', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Parallax dark fullwidth'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/parallax-dark-fullwidth.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_7' =>array(
            'title' => esc_html__( 'Particles', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Particles'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/particles.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_8' =>array(
            'title' => esc_html__( 'Text rotator', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Text rotator'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/text-rotator.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_9' =>array(
            'title' => esc_html__( 'Text rotator dark', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Text rotator dark'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/text-rotator-dark.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_10' =>array(
            'title' => esc_html__( 'Video background', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Video background'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/video-background.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_11' =>array(
            'title' => esc_html__( 'Video background dark', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Video background dark'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/video-background-dark.jpg',
            'demo_url' => '#',
        ),
        'custom_sliders_12' =>array(
            'title' => esc_html__( 'Video carousel', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'custom', 'sliders' ),
            'categories' => array( 'custom-sliders' ),
               'template_url' => array(
                   'content' => $demo_url . 'hero/content.json',
                   'options' => $demo_url . 'hero/options.json',
                   'widgets' => $demo_url . 'hero/widgets.json',
                  'settings' => $demo_url . 'hero/settings.txt',
                   'home_page' => 'Video carousel'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/custom-sliders/video-carousel.jpg',
            'demo_url' => '#',
        ),
        'niche_application' =>array(
            'title' => esc_html__( 'Niche application', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'App showcase'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/application.jpg',
            'demo_url' => '#',
        ),
        'niche_branding' =>array(
            'title' => esc_html__( 'Niche branding', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Branding'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/branding.jpg',
            'demo_url' => '#',
        ),
        'niche_construction' =>array(
            'title' => esc_html__( 'Niche construction', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Construction'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/construction.jpg',
            'demo_url' => '#',
        ),
        'niche_design_studio' =>array(
            'title' => esc_html__( 'Niche design studio', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Design studio'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/design-st.jpg',
            'demo_url' => '#',
        ),
        'niche_nature' =>array(
            'title' => esc_html__( 'Niche nature', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Nature'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/nature.jpg',
            'demo_url' => '#',
        ),
        'niche_resume' =>array(
            'title' => esc_html__( 'Niche resume', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Resume'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/resume.jpg',
            'demo_url' => '#',
        ),
        'niche_web_design' =>array(
            'title' => esc_html__( 'Niche web design', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'niche' ),
            'categories' => array( 'niche' ),
               'template_url' => array(
                   'content' => $demo_url . 'niche/content.json',
                   'options' => $demo_url . 'niche/options.json',
                   'widgets' => $demo_url . 'niche/widgets.json',
                  'settings' => $demo_url . 'niche/settings.txt',
                   'slider_rev' => 'niche',
                   'home_page' => 'Web design'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/niche/web-design.jpg',
            'demo_url' => '#',
        ),
        'fashion' =>array(
            'title' => esc_html__( 'Fashion', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'fashion' ),
            'categories' => array( 'fashion' ),
               'template_url' => array(
                   'content' => $demo_url . 'fashion/content.json',
                   'options' => $demo_url . 'fashion/options.json',
                   'widgets' => $demo_url . 'fashion/widgets.json',
                  'settings' => $demo_url . 'fashion/settings.txt',
                   'slider_rev' => 'fashion'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/fashion.jpg',
            'demo_url' => '#',
        ),
        'model' =>array(
            'title' => esc_html__( 'Model', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'model' ),
            'categories' => array( 'model' ),
               'template_url' => array(
                   'content' => $demo_url . 'model/content.json',
                   'options' => $demo_url . 'model/options.json',
                   'widgets' => $demo_url . 'model/widgets.json',
                  'settings' => $demo_url . 'model/settings.txt',
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/model.jpg',
            'demo_url' => '#',
        ),
        'lawyer' =>array(
            'title' => esc_html__( 'Lawyer', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'lawyer' ),
            'categories' => array( 'lawyer' ),
               'template_url' => array(
                   'content' => $demo_url . 'lawyer/content.json',
                   'options' => $demo_url . 'lawyer/options.json',
                   'widgets' => $demo_url . 'lawyer/widgets.json',
                  'settings' => $demo_url . 'lawyer/settings.txt',
                   'slider_rev' => 'lawyer'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/lawyer.jpg',
            'demo_url' => '#',
        ),
        'taxi' =>array(
            'title' => esc_html__( 'Taxi', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'taxi' ),
            'categories' => array( 'taxi' ),
               'template_url' => array(
                   'content' => $demo_url . 'taxi/content.json',
                   'options' => $demo_url . 'taxi/options.json',
                   'widgets' => $demo_url . 'taxi/widgets.json',
                  'settings' => $demo_url . 'taxi/settings.txt',
                   'home_page' => 'Polo Taxi'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/taxi.jpg',
            'demo_url' => '#',
        ),
        'real_estate' =>array(
            'title' => esc_html__( 'Real estate', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'real', 'estate' ),
            'categories' => array( 'real-estate' ),
               'template_url' => array(
                   'content' => $demo_url . 'real-estate/content.json',
                   'options' => $demo_url . 'real-estate/options.json',
                   'widgets' => $demo_url . 'real-estate/widgets.json',
                  'settings' => $demo_url . 'real-estate/settings.txt',
                   'slider_rev' => 'real-estate'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/real-estate.jpg',
            'demo_url' => '#',
        ),
        'backery' =>array(
            'title' => esc_html__( 'Backery', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'backery' ),
            'categories' => array( 'backery' ),
               'template_url' => array(
                   'content' => $demo_url . 'backery/content.json',
                   'options' => $demo_url . 'backery/options.json',
                   'widgets' => $demo_url . 'backery/widgets.json',
                  'settings' => $demo_url . 'backery/settings.txt',
                   'slider_rev' => 'backery'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/backery.jpg',
            'demo_url' => '#'
        ),
        'cafe' =>array(
            'title' => esc_html__( 'Cafe', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'cafe' ),
            'categories' => array( 'cafe' ),
               'template_url' => array(
                   'content' => $demo_url . 'cafe/content.json',
                   'options' => $demo_url . 'cafe/options.json',
                   'widgets' => $demo_url . 'cafe/widgets.json',
                  'settings' => $demo_url . 'cafe/settings.txt',
                   'slider_rev' => 'cafe'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/cafe.jpg',
            'demo_url' => '#',
        ),
        'restaurant' =>array(
            'title' => esc_html__( 'Restaurant', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'restaurant' ),
            'categories' => array( 'restaurant' ),
               'template_url' => array(
                   'content' => $demo_url . 'restaurant/content.json',
                   'options' => $demo_url . 'restaurant/options.json',
                   'widgets' => $demo_url . 'restaurant/widgets.json',
                  'settings' => $demo_url . 'restaurant/settings.txt',
                   'slider_rev' => 'restaurant'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/restaurant.jpg',
            'demo_url' => '#',
        ),
        'fitness' =>array(
            'title' => esc_html__( 'Fitness', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'fitness' ),
            'categories' => array( 'fitness' ),
               'template_url' => array(
                   'content' => $demo_url . 'fitness/content.json',
                   'options' => $demo_url . 'fitness/options.json',
                   'widgets' => $demo_url . 'fitness/widgets.json',
                  'settings' => $demo_url . 'fitness/settings.txt',
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/fitness.jpg',
            'demo_url' => '#',
        ),
        'architect' =>array(
            'title' => esc_html__( 'Architect', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'architect' ),
            'categories' => array( 'architect' ),
               'template_url' => array(
                   'content' => $demo_url . 'architect/content.json',
                   'options' => $demo_url . 'architect/options.json',
                   'widgets' => $demo_url . 'architect/widgets.json',
                  'settings' => $demo_url . 'architect/settings.txt',
                   'slider_rev' => 'architect'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/architect.jpg',
            'demo_url' => '#',
        ),
        'wine' =>array(
            'title' => esc_html__( 'Wine', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'wine' ),
            'categories' => array( 'wine' ),
               'template_url' => array(
                   'content' => $demo_url . 'wine/content.json',
                   'options' => $demo_url . 'wine/options.json',
                   'widgets' => $demo_url . 'wine/widgets.json',
                  'settings' => $demo_url . 'wine/settings.txt',
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/wine.jpg',
            'demo_url' => '#',
        ),
        'shop_1' =>array(
            'title' => esc_html__( 'Shop v1', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'shop' ),
            'categories' => array( 'shop' ),
               'template_url' => array(
                   'content' => $demo_url . 'shop/content.json',
                   'options' => $demo_url . 'shop/options.json',
                   'widgets' => $demo_url . 'shop/widgets.json',
                  'settings' => $demo_url . 'shop/settings.txt',
                   'slider_rev' => 'shop',
                   'home_page' => 'Home Shop'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/shop/shop-v1.jpg',
            'demo_url' => '#',
            'plugins' => array(
                array(
                    'name'  => 'WooCommerce',
                    'slug'  => 'woocommerce',
                )
            )
        ),
        'shop_2' =>array(
            'title' => esc_html__( 'Shop v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'shop' ),
            'categories' => array( 'shop' ),
               'template_url' => array(
                   'content' => $demo_url . 'shop/content.json',
                   'options' => $demo_url . 'shop/options.json',
                   'widgets' => $demo_url . 'shop/widgets.json',
                  'settings' => $demo_url . 'shop/settings.txt',
                   'slider_rev' => 'shop',
                   'home_page' => 'Home Shop v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/shop/shop-v2.jpg',
            'demo_url' => '#',
            'plugins' => array(
                array(
                    'name'  => 'WooCommerce',
                    'slug'  => 'woocommerce',
                )
            )
        ),
        'shop_3' =>array(
            'title' => esc_html__( 'Shop v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'shop' ),
            'categories' => array( 'shop' ),
               'template_url' => array(
                   'content' => $demo_url . 'shop/content.json',
                   'options' => $demo_url . 'shop/options.json',
                   'widgets' => $demo_url . 'shop/widgets.json',
                  'settings' => $demo_url . 'shop/settings.txt',
                   'slider_rev' => 'shop',
                   'home_page' => 'Home Shop v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/shop/shop-v3.jpg',
            'demo_url' => '#',
            'plugins' => array(
                array(
                    'name'  => 'WooCommerce',
                    'slug'  => 'woocommerce',
                )
            )
        ),
        'shop_4' =>array(
            'title' => esc_html__( 'Shop v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'shop' ),
            'categories' => array( 'shop' ),
               'template_url' => array(
                   'content' => $demo_url . 'shop/content.json',
                   'options' => $demo_url . 'shop/options.json',
                   'widgets' => $demo_url . 'shop/widgets.json',
                  'settings' => $demo_url . 'shop/settings.txt',
                   'slider_rev' => 'shop',
                   'home_page' => 'Home Shop v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/shop/shop-v4.jpg',
            'demo_url' => '#',
            'plugins' => array(
                array(
                    'name'  => 'WooCommerce',
                    'slug'  => 'woocommerce',
                )
            )
        ),
        'portfolio_v1' =>array(
            'title' => esc_html__( 'Portfolio v1', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v1.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v2' =>array(
            'title' => esc_html__( 'Portfolio v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v2.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v3' =>array(
            'title' => esc_html__( 'Portfolio v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v3.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v4' =>array(
            'title' => esc_html__( 'Portfolio v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v4.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v5' =>array(
            'title' => esc_html__( 'Portfolio v5', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v5'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v5.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v6' =>array(
            'title' => esc_html__( 'Portfolio v6', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v6'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v6.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v7' =>array(
            'title' => esc_html__( 'Portfolio v7', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v7'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v7.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v8' =>array(
            'title' => esc_html__( 'Portfolio v8', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio v8'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v8.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v9' =>array(
            'title' => esc_html__( 'Portfolio Side Panel', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Portfolio Side Panel'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/portfolio-v9.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v10' =>array(
            'title' => esc_html__( 'Portfolio Agency', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Portfolio Agency'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/agency.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v11' =>array(
            'title' => esc_html__( 'Agency v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Agency v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/agency-v3.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v12' =>array(
            'title' => esc_html__( 'Agency v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home Agency v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/agency-v4.jpg',
            'demo_url' => '#',
        ),
        'portfolio_v13' =>array(
            'title' => esc_html__( 'Developers', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'portfolio' ),
            'categories' => array( 'portfolio' ),
               'template_url' => array(
                   'content' => $demo_url . 'portfolio/content.json',
                   'options' => $demo_url . 'portfolio/options.json',
                   'widgets' => $demo_url . 'portfolio/widgets.json',
                  'settings' => $demo_url . 'portfolio/settings.txt',
                   'slider_rev' => 'portfolio',
                   'home_page' => 'Home developer'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/portfolio/developers.jpg',
            'demo_url' => '#',
        ),
        'magazine_1' =>array(
            'title' => esc_html__( 'Home blog', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog.jpg',
            'demo_url' => '#',
        ),
        'magazine_2' =>array(
            'title' => esc_html__( 'Home blog v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v2.jpg',
            'demo_url' => '#',
        ),
        'magazine_3' =>array(
            'title' => esc_html__( 'Home blog v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v3.jpg',
            'demo_url' => '#',
        ),
        'magazine_4' =>array(
            'title' => esc_html__( 'Home blog v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v4.jpg',
            'demo_url' => '#',
        ),
        'magazine_5' =>array(
            'title' => esc_html__( 'Home blog v5', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v5'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v5.jpg',
            'demo_url' => '#',
        ),
        'magazine_6' =>array(
            'title' => esc_html__( 'Home blog v6', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v6'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v6.jpg',
            'demo_url' => '#',
        ),
        'magazine_7' =>array(
            'title' => esc_html__( 'Home blog v7', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v7'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v7.jpg',
            'demo_url' => '#',
        ),
        'magazine_8' =>array(
            'title' => esc_html__( 'Home blog v8', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home blog v8'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/blog-v8.jpg',
            'demo_url' => '#',
        ),
        'magazine_9' =>array(
            'title' => esc_html__( 'Home magazine', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home magazine'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/magazine.jpg',
            'demo_url' => '#',
        ),
        'magazine_10' =>array(
            'title' => esc_html__( 'Home magazine v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home magazine v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/magazine-v2.jpg',
            'demo_url' => '#',
        ),
        'magazine_11' =>array(
            'title' => esc_html__( 'Home magazine v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home magazine v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/magazine-v3.jpg',
            'demo_url' => '#',
        ),
        'magazine_12' =>array(
            'title' => esc_html__( 'Home magazine v4', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'magazine' ),
            'categories' => array( 'magazine' ),
               'template_url' => array(
                   'content' => $demo_url . 'magazine/content.json',
                   'options' => $demo_url . 'magazine/options.json',
                   'widgets' => $demo_url . 'magazine/widgets.json',
                  'settings' => $demo_url . 'magazine/settings.txt',
                   'home_page' => 'Home magazine v4'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/magazine/magazine-v4.jpg',
            'demo_url' => '#',
        ),
        'onepage_1' =>array(
            'title' => esc_html__( 'Home One Page', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'onepage' ),
            'categories' => array( 'one-page' ),
               'template_url' => array(
                   'content' => $demo_url . 'onepage/content.json',
                   'options' => $demo_url . 'onepage/options.json',
                   'widgets' => $demo_url . 'onepage/widgets.json',
                  'settings' => $demo_url . 'onepage/settings.txt',
                   'home_page' => 'Home One Page'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/one-page/one-page-v1.jpg',
            'demo_url' => '#',
        ),
        'onepage_2' =>array(
            'title' => esc_html__( 'Home One Page v2', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'onepage' ),
            'categories' => array( 'one-page' ),
               'template_url' => array(
                   'content' => $demo_url . 'onepage/content.json',
                   'options' => $demo_url . 'onepage/options.json',
                   'widgets' => $demo_url . 'onepage/widgets.json',
                  'settings' => $demo_url . 'onepage/settings.txt',
                   'home_page' => 'Home One Page v2'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/one-page/one-page-v2.jpg',
            'demo_url' => '#',
        ),
        'onepage_3' =>array(
            'title' => esc_html__( 'Home One Page v3', 'polo' ),
            'is_pro' => false,
            'keywords' => array( 'onepage' ),
            'categories' => array( 'one-page' ),
               'template_url' => array(
                   'content' => $demo_url . 'onepage/content.json',
                   'options' => $demo_url . 'onepage/options.json',
                   'widgets' => $demo_url . 'onepage/widgets.json',
                  'settings' => $demo_url . 'onepage/settings.txt',
                   'home_page' => 'Home One Page v3'
               ),
            'screenshot_url' => POLO_ROOT_URL . '/assets/demo-img/one-page/one-page-v2.jpg',
            'demo_url' => '#',
        ),
    );

    foreach($demo_lists as $k => $demo_list){
        if( !isset($demo_lists[$k]['plugins']) ){
            $demo_lists[$k]['plugins'] = array(
                array(
                    'name'      => 'Revolution Slider',
                    'slug'      => 'revslider',
                    'source'    =>  'http://up.crumina.net/plugins/revslider.zip',
                ),
                array(
                    'name'      => 'Crumina Polo extension',
                    'slug'      => 'polo_extension',
                    'source'    =>  'http://up.crumina.net/plugins/polo_extension.zip',
                ),
                array(
                    'name'      => 'WPBakery Visual Composer',
                    'slug'      => 'js_composer',
                    'source'    =>  'http://up.crumina.net/plugins/js_composer.zip',
                ),
            );
        } else {
            $pl = $demo_lists[$k]['plugins'];
            array_push( $pl, array(
                'name'      => 'Revolution Slider',
                'slug'      => 'revslider',
                'source'    =>  'http://up.crumina.net/plugins/revslider.zip',
            ) );
            array_push( $pl, array(
                'name'      => 'Crumina Polo extension',
                'slug'      => 'polo_extension',
                'source'    =>  'http://up.crumina.net/plugins/polo_extension.zip',
            ) );
            array_push( $pl, array(
                'name'      => 'WPBakery Visual Composer',
                'slug'      => 'js_composer',
                'source'    =>  'http://up.crumina.net/plugins/js_composer.zip',
            ) );

            $demo_lists[$k]['plugins'] = $pl;
        }
    }

    return $demo_lists;
}

/*add_action( 'advanced_import_is_pro_active','prefix_set_active' );
function prefix_set_active($is_pro_active){
    //You can add your own logic to return true or false
    return true;
}*/

function polo_slider_demo_names( $folder ){
    $sliders_arr = array();
    switch ($folder) {
        case 'architect':
            $sliders_arr = array(
                'Polo_architect'
            );
            break;
        case 'backery':
            $sliders_arr = array(
                'bakery'
            );
            break;
        case 'cafe':
            $sliders_arr = array(
                'polo_cafe'
            );
            break;
        case 'corporate':
            $sliders_arr = array(
                'corporate-v3',
                'corporate-v4',
                'corporate-v5',
                'corporate-v6',
                'corporate-v7',
                'corporate-v8',
                'home_polo',
                'home-business',
                'portfolio-slider',
                'Slider1',
                'Slider-Headers',
            );
            break;
        case 'creative':
            $sliders_arr = array(
                'creative-v2',
                'creative-v4',
                'portfolio-slider',
            );
            break;
        case 'fashion':
            $sliders_arr = array(
                'fashion',
            );
            break;
        case 'lawyer':
            $sliders_arr = array(
                'polo_lawyer',
            );
            break;
        case 'niche':
            $sliders_arr = array(
                'home_construction',
                'Polo_App_Showcase',
                'Slider-Headers',
            );
            break;
        case 'portfolio':
            $sliders_arr = array(
                'portfolio-slider',
            );
            break;
        case 'real-estate':
            $sliders_arr = array(
                'real_estate',
            );
            break;
        case 'restaurant':
            $sliders_arr = array(
                'polo_restaurant',
            );
            break;
        case 'shop':
            $sliders_arr = array(
                'polo-shop-v2',
                'polo-shop-v3',
            );
            break;
    }

    return $sliders_arr;
}

function polo_copy_sliders( $demo_url, $folder ) {
  $uploads = wp_upload_dir();
  $temp    = trailingslashit( $uploads['basedir'] ) . 'polo_theme_import_temp/revslider/' . $folder;
  if ( ! is_dir( $temp ) ) {
    wp_mkdir_p( $temp );
  }
  @chmod( $temp, 0777 );

  $sliders_arr = polo_slider_demo_names($folder);
  if(!empty($sliders_arr)){
    foreach($sliders_arr as $slider){
      $single_slider_name = $slider . '.zip';
      if ( ! file_exists( $temp . $single_slider_name ) ) {
        if ( ! @copy( $demo_url . 'revslider/' . $folder . '/' . $single_slider_name, $temp . '/' . $single_slider_name ) ) {
          $errors = error_get_last();
          echo "COPY ERROR: " . $errors['type'];
          echo "<br />\n" . $errors['message'];
        } else {
          echo "File copied from remote!";
        }
      }
    }
  }
}

add_action('advanced_import_before_content_screen', 'polo_import_slider');
function polo_import_slider(){
  // Import slider
    $demo_url = 'http://up.crumina.net/demo-data/polo/';

  if( isset( $_POST['template_url']['slider_rev'] ) ){
    $folder = trim($_POST['template_url']['slider_rev']);
    if ( class_exists( 'RevSlider' ) ) {
        polo_copy_sliders($demo_url, $folder);
      $uploads = wp_upload_dir();
      $temp    = trailingslashit( $uploads['basedir'] ) . 'polo_theme_import_temp/revslider/' . $folder;
      foreach(glob($temp.'/*.zip') as $file) {
       $slider = new RevSlider();
       $alias = basename($file, ".zip");
       $slider->initByAlias($alias);
       $slider->delete_slider();

       $slider->importSliderFromPost( true, true, $file );
      }
    }
  }

  // Import options (save value)
  if( isset( $_POST['template_url']['settings'] ) ){
    set_transient( '_cs_options_import', $_POST['template_url']['settings'], 60 * 60 * 24 );
  }

  // Set home page (save value)
  if( isset( $_POST['template_url']['home_page'] ) ) {
    $title = esc_html($_POST['template_url']['home_page']);
    update_option( 'page_on_front_import', $title );
  }
}

function polo_isJson($string) {
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
}

add_action('advanced_import_after_complete_screen', 'polo_import_home_demo');
function polo_import_home_demo(){
  // Set home page
  $page_on_front = maybe_unserialize(get_option('page_on_front_import'));
  if( $page_on_front != '' ){
    $page = get_page_by_title( $page_on_front );
    if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
    }
  }

  delete_option('page_on_front_import');

  // Import options
  $cs_options = maybe_unserialize(get_transient( '_cs_options_import' ));
  if($cs_options != ''){
    $file = wp_remote_fopen( $cs_options );
    if(polo_isJson($file)){
        $options = json_decode($file, true);
    } else {
        $options = maybe_unserialize( $file );
    }
    $images_ids = get_transient( 'imported_post_ids' );

    if(isset($options['st-header-bg-image'])){
      $old = $options['st-header-bg-image'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['st-header-bg-image'] = $new;
      }
    }

    if(isset($options['logotype-image'])){
      $old = $options['logotype-image'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['logotype-image'] = $new;
      }
    }

    if(isset($options['logotype-image-retina'])){
      $old = $options['logotype-image-retina'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['logotype-image-retina'] = $new;
      }
    }

    if(isset($options['page_404_parallax_image'])){
      $old = $options['page_404_parallax_image'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['page_404_parallax_image'] = $new;
      }
    }

    if(isset($options['footer-logotype-image'])){
      $old = $options['footer-logotype-image'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['footer-logotype-image'] = $new;
      }
    }

    if(isset($options['footer-logotype-image-retina'])){
      $old = $options['footer-logotype-image-retina'];
      $new = isset( $images_ids[ $old ] ) ? $images_ids[ $old ] : false;
      if($new){
        $options['footer-logotype-image-retina'] = $new;
      }
    }

    update_option('_cs_options', $options);
  }

  delete_transient('_cs_options_import');
}