<?php
/**
 * Template Name: Gallery Landing Page
 * 
 * This is a custom page template for the Gallery landing page
 * designed to match the Figma design exactly.
 */

get_header(); ?>

<div class="gallery-landing-page">
    <div class="gallery-container">
        <!-- Gallery Header Section -->
        <header class="gallery-header">
            <div class="gallery-title">
                <h1>Gallery</h1>
            </div>
        </header>

        <!-- Gallery Grid Section -->
        <section class="gallery-grid">
            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-1.jpg" alt="Gallery Image 1">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>

            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-2.jpg" alt="Gallery Image 2">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>

            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-3.jpg" alt="Gallery Image 3">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>

            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-4.jpg" alt="Gallery Image 4">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>

            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-5.jpg" alt="Gallery Image 5">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>

            <div class="gallery-item" data-category="all">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-6.jpg" alt="Gallery Image 6">
                </div>
                <div class="gallery-overlay">
                    <h3>Project Title</h3>
                    <p>Project Description</p>
                </div>
            </div>
        </section>

        <!-- Gallery Navigation -->
        <nav class="gallery-navigation">
            <button class="nav-btn active" data-category="all">All</button>
            <button class="nav-btn" data-category="category1">Category 1</button>
            <button class="nav-btn" data-category="category2">Category 2</button>
            <button class="nav-btn" data-category="category3">Category 3</button>
        </nav>
    </div>
</div>

<?php get_footer(); ?>
