<?php
/**
 * Template Name: Landing Page with Animation
 *
 * @package Genesis Block Theme
 */

get_header(); ?>

<div id="landing-page" class="landing-page-container">
    <!-- Animation Container -->
    <div id="animation-container" class="animation-container">
        <!-- Background -->
        <div class="background-base"></div>
        
        <!-- Vector Background Shape -->
        <div class="vector-background"></div>
        
        <!-- Ellipse 1 -->
        <div class="ellipse ellipse-1"></div>
        
        <!-- Ellipse 2 -->
        <div class="ellipse ellipse-2"></div>
        
        <!-- Animation Stages -->
        <div class="animation-stages">
            <!-- Stage 1: Initial state -->
            <div class="stage stage-1 active">
                <div class="stage-content">
                    <!-- Empty stage -->
                </div>
            </div>
            
            <!-- Stage 2: First letter appears -->
            <div class="stage stage-2">
                <div class="stage-content">
                    <div class="text-element text-c">C</div>
                </div>
            </div>
            
            <!-- Stage 3: More text appears -->
            <div class="stage stage-3">
                <div class="stage-content">
                    <div class="text-element text-c">C</div>
                    <div class="text-element text-w">w</div>
                </div>
            </div>
            
            <!-- Stage 4: Full "Coming Soon" -->
            <div class="stage stage-4">
                <div class="stage-content">
                    <div class="text-element text-coming-soon">Coming Soon</div>
                    <div class="text-element text-w">w</div>
                </div>
            </div>
            
            <!-- Stage 5: Portfolio showcase -->
            <div class="stage stage-5">
                <div class="stage-content">
                    <div class="text-element text-coming-soon">Coming Soon</div>
                    <div class="text-element text-website">website under construction</div>
                    
                    <!-- Portfolio Frames -->
                    <div class="portfolio-showcase">
                        <div class="portfolio-frame frame-1">
                            <div class="frame-content green-bg">
                                <div class="image-placeholder img-1"></div>
                                <div class="image-placeholder img-2"></div>
                            </div>
                        </div>
                        <div class="portfolio-frame frame-2">
                            <div class="frame-content purple-bg">
                                <div class="logo-placeholder"></div>
                            </div>
                        </div>
                        <div class="portfolio-frame frame-3">
                            <div class="frame-content blue-bg">
                                <div class="banner-placeholder"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stage 6: Final state -->
            <div class="stage stage-6">
                <div class="stage-content">
                    <div class="text-element text-coming-soon">Coming Soon</div>
                    <div class="text-element text-website">website under construction. visit https://www.instagram.com/avery.b33/ for more recent work.</div>
                    
                    <!-- Portfolio Frames with full opacity -->
                    <div class="portfolio-showcase">
                        <div class="portfolio-frame frame-1">
                            <div class="frame-content green-bg">
                                <div class="image-placeholder img-1"></div>
                                <div class="image-placeholder img-2"></div>
                            </div>
                        </div>
                        <div class="portfolio-frame frame-2">
                            <div class="frame-content purple-bg">
                                <div class="logo-placeholder"></div>
                            </div>
                        </div>
                        <div class="portfolio-frame frame-3">
                            <div class="frame-content blue-bg">
                                <div class="banner-placeholder"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Instagram Link -->
                    <div class="instagram-link">
                        <a href="https://www.instagram.com/avery.b33/" target="_blank">https://www.instagram.com/avery.b33/</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content Area -->
    <main id="main-content" class="main-content" style="display: none;">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
        ?>
    </main>
</div>

<?php
// Enqueue the custom CSS and JS files
wp_enqueue_style( 'landing-animations', get_template_directory_uri() . '/assets/css/landing-animations.css', array(), '1.0.0' );
wp_enqueue_script( 'landing-animation', get_template_directory_uri() . '/assets/js/landing-animation.js', array(), '1.0.0', true );
?>

<?php
get_footer();
?>
