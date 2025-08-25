<?php
/**
 * Template Name: Landing Page
 * 
 * This is a custom page template for the Landing page
 * with image slider and infinite banner scroll.
 */

// Enqueue the slider JavaScript
wp_enqueue_script('landing-slider', get_template_directory_uri() . '/assets/js/landing-slider.js', array(), '1.0.0', true);

get_header(); ?>

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

<?php get_footer(); ?>
