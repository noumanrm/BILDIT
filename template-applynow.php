  <?php
/**
 Template Name: Apply Now Page
 */

get_header();
?>
 <!-- === Career Detail Section === -->
    <div class="apply_now_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="career_back_arrow_main">
                <a href="career-detail.html"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
            <div class="apply_now_inner">
                <h1>Business Development Manager, Distribution - Location Flexible</h1>
                <h2>San Francisco, CA; Remote - US</h2>
            </div>
            <div class="apply_now_form">
                 <?php  the_field('apply_now_form');?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
 