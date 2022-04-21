<?php
/**
 Template Name: Thank You Page
 */

get_header();
?>

    <!-- === banner === -->
   <div class="submit_banner_main">
       <div class="site_container">
            <div class="submit_banner_inner">
                <div class="sub_banner_img">
 				 <img src="<?php the_field('section_1_banner_image');?>" alt="email-icon">
				 <img src="<?php the_field('section_1_logo');?>" alt="email-icon">

                    
                </div>
                 <h1><?php the_field('section_1_heading'); ?></h1>
                <p><?php the_field('section_1_sub_heading'); ?></p>
            </div>
        </div>
   </div>
    <!-- === banner end === -->

    <!-- === joining us  === -->

    <!-- === joining us end  === -->

<?php get_footer(); ?>
