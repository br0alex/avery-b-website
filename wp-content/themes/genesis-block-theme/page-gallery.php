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
            <div class="banner-text-container">
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
                <span class="banner-text">NEW SITE // COMING SOON</span>
            </div>
        </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Photo Gallery Container -->
        <div class="gallery-container">
            <div class="gallery-border">
                <div class="gallery-content">
                    <?php
                    // Get gallery images from custom post type
                    $gallery_images = get_posts(array(
                        'post_type' => 'gallery_image',
                        'numberposts' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'post_status' => 'publish'
                    ));
                    
                    if ($gallery_images) {
                        echo '<div class="gallery-grid">';
                        foreach ($gallery_images as $image_post) {
                            // Get image source (featured image or custom URL)
                            $image_url = get_post_meta($image_post->ID, '_gallery_image_url', true);
                            if (!$image_url && has_post_thumbnail($image_post->ID)) {
                                $image_url = get_the_post_thumbnail_url($image_post->ID, 'full');
                            }
                            
                            // Get alt text and caption
                            $alt_text = get_post_meta($image_post->ID, '_gallery_image_alt', true) ?: $image_post->post_title;
                            $caption = get_post_meta($image_post->ID, '_gallery_image_caption', true);
                            
                            if ($image_url) {
                                echo '<div class="gallery-item">';
                                echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '" />';
                                if ($caption) {
                                    echo '<div class="gallery-caption">' . esc_html($caption) . '</div>';
                                }
                                echo '</div>';
                            }
                        }
                        echo '</div>';
                    } else {
                        // Fallback placeholder if no images
                        echo '<div class="gallery-placeholder">';
                        echo '<p>No gallery images found.</p>';
                        echo '<p>Add images through WordPress Admin → Gallery Images</p>';
                        echo '</div>';
                    }
                    ?>
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
