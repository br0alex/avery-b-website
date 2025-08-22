<?php
/**
 * Template Name: Gallery Landing Page
 * 
 * This is a custom page template for the Gallery landing page
 * designed to match the exact specifications.
 */

get_header(); ?>

<div class="gallery-landing-page">
    <!-- Sticky Banner -->
    <div class="sticky-banner">
        <div class="banner-text">
            NEW SITE // COMING SOON
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Photo Gallery Container -->
        <div class="gallery-container">
            <div class="gallery-border">
                <div class="gallery-content">
                    <!-- Photo gallery content will go here -->
                    <div class="gallery-placeholder">
                        <p>Photo Gallery (1434x819)</p>
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

    <!-- Layer1.svg in bottom right corner -->
    <div class="bottom-right-image">
        <img src="<?php echo get_template_directory_uri(); ?>/../Layer 1.svg" alt="Layer 1">
    </div>
</div>

<?php get_footer(); ?>
