<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bildit
 */
get_header();
?>
<!-- === Career Detail Section === -->
    <div class="career_main_detail">
        <div class="site_container">
            <div class="career_back_arrow_main">
                <a href="#"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
            <?php
        while ( have_posts() ) :
            the_post(); ?>
            <div class="career_detail_main_inner">
                <div class="career_detail_main_left" data-aos="fade-up" data-aos-duration="3000">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('location'); ?></h2>
                </div>
                <div class="career_detail_main_right">
                    <div class="gradient-btn">
                        <a href="#">APPLY NOW</a>
                    </div>
                </div>

            </div>
            <div class="career_detail_description">
                <?php the_content(); ?>
            <?php endwhile; ?>
                

            </div>

            <span>Share</span>

                <div class="jd_share_icon">
                    <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                </div>
            <div class="career_detail_main_right apply_now_btn">
                <div class="gradient-btn">
                    <a href="#">APPLY NOW</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php get_footer(); ?>