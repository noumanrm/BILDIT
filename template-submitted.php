<?php
/**
 Template Name: Submitted Application Page
 */

get_header();
?>

    <!-- === banner === -->
   <div class="submit_banner_main">
       <div class="site_container">
            <div class="submit_banner_inner">
                <div class="sub_banner_img">
                    <img src="<?php bloginfo('template_url'); ?>/images/submit-banner-img1.png">
                    
                </div>
                 <h1><?php the_field('application_heading'); ?></h1>
                <p><?php the_field('application_sub_heading'); ?></p>
            </div>
        </div>
   </div>
    <!-- === banner end === -->

    <!-- === joining us  === -->
    <div class="submit_job_main_body">
        <div class="join_main">
            <div class="site_container">
                <div class="join_inner careers_font_size">
                    <h2>Similar jobs you might be interest</h2>
                    <div class="available_positions">
                        <?php 
                            wp_reset_postdata();
                            $query_args = array(
                                'post_type' => 'career',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'meta_value'
                               
                                
                            );
                            $the_query = new WP_Query( $query_args );
                            ?>
                             <?php while( $the_query->have_posts() ) {
                                $the_query->the_post(); 
                                
                             
                          ?>
                        <div class="work_positios" data-aos="fade-right" data-aos-duration="2000">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt() ?>
                            <div class="position_detail">
                                <div class="pd_left">
                                    <div class="pd_left_inner">
                                        <span class="location_img">
                                        <img src="<?php bloginfo('template_url'); ?>/images/careers/location.svg" alt="">
                                    </span>
                                        <p><?php the_field('location') ?></p>
                                    </div>
                                    <div class="pd_left_inner">
                                        <img src="<?php bloginfo('template_url'); ?>/images/careers/dev_team.svg" alt="">
                                        <p>Dev Team</p>
                                    </div>
                                </div>
                                <div class="pd_right">
                                    <a href="<?php the_permalink(); ?>">view details</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                         <?php wp_reset_postdata(); ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- === joining us end  === -->

<?php get_footer(); ?>
