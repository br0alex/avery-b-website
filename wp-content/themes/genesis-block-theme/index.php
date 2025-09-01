<?php
/**
 * The main template file - Landing Page Home
 *
 * @package Genesis Block Theme
 */

// Enqueue the landing page CSS
wp_enqueue_style('landing-page', get_template_directory_uri() . '/assets/css/landing-page.css', array(), '1.0.0');

// Enqueue the slider JavaScript
wp_enqueue_script('landing-slider', get_template_directory_uri() . '/assets/js/landing-slider.js', array(), '1.0.0', true);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title>Avery Boroff</title>
    <meta name="description" content="New site coming soon. Follow us on Instagram @avery.b33">
    <link rel="icon" href="<?php echo get_site_url(); ?>/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="landing-page">
    <!-- Sticky Banner -->
    <div class="sticky-banner">
        <div class="banner-text-container">
            <span class="banner-text">// NEW SITE // COMING SOON </span>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Image Slider Container -->
        <div class="slider-container">
            <div class="slider-border">
                <div class="gallery-content">
                    <div class="gallery-slider">
                        <!-- Gallery Image 1 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 1.jpg" alt="Gallery Image 1">
                            <div class="gallery-caption">Gallery Image 1</div>
                        </div>
                        
                        <!-- Gallery Image 2 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 2.jpg" alt="Gallery Image 2">
                            <div class="gallery-caption">Gallery Image 2</div>
                        </div>
                        
                        <!-- Gallery Image 3 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 3.jpg" alt="Gallery Image 3">
                            <div class="gallery-caption">Gallery Image 3</div>
                        </div>
                        
                        <!-- Gallery Image 4 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 4.jpg" alt="Gallery Image 4">
                            <div class="gallery-caption">Gallery Image 4</div>
                        </div>
                        
                        <!-- Gallery Image 5 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 5.jpg" alt="Gallery Image 5">
                            <div class="gallery-caption">Gallery Image 5</div>
                        </div>
                        
                        <!-- Gallery Image 6 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 6.jpg" alt="Gallery Image 6">
                            <div class="gallery-caption">Gallery Image 6</div>
                        </div>
                        
                        <!-- Gallery Image 7 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 7.jpg" alt="Gallery Image 7">
                            <div class="gallery-caption">Gallery Image 7</div>
                        </div>
                        
                        <!-- Gallery Image 9 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 9.jpg" alt="Gallery Image 9">
                            <div class="gallery-caption">Gallery Image 9</div>
                        </div>
                        
                        <!-- Gallery Image 10 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 10.jpg" alt="Gallery Image 10">
                            <div class="gallery-caption">Gallery Image 10</div>
                        </div>
                        
                        <!-- Gallery Image 11 -->
                        <div class="gallery-slide">
                            <img src="<?php echo get_site_url(); ?>/images/Property 1=scroll gallery 11.jpg" alt="Gallery Image 11">
                            <div class="gallery-caption">Gallery Image 11</div>
                        </div>
                        
                        <!-- Slider Navigation Dots -->
                        <div class="slider-dots">
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                            <div class="slider-dot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Link -->
        <div class="instagram-link">
            <a href="https://www.instagram.com/avery.b33/" target="_blank">
                @https://www.instagram.com/avery.b33/
            </a>
        </div>
    </div>

    <!-- averyfinallogo.svg logo in bottom right corner -->
    <div class="bottom-right-image">
        <img src="<?php echo get_site_url(); ?>/averyfinallogo.svg" alt="Logo">
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
