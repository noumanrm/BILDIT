<?php
/**
 Template Name: Home Page
 */

get_header();
?>
    <!-- === Banner === -->
    <div class="bildit_banner_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="banner_inner">
                <div class="banner_text">
                    <h1><?php the_field('banner_heading');?></h1>
                    <p><?php  the_field('banner_sub_heading');?></p>
                    <div class="gradient-btn">
                        <a href="<?php  the_field('banner_cta_url');?>"><?php  the_field('banner_cta_text');?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- === Banner end === -->


    <!-- === How its Works === -->
    <div class="hiw_main">
        <div class="site_container">
            <div class="hiw_inner">
                <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php the_field('premium_heading');?></h2>
                <div class="hiw_left">
                    <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('premium_caption');?></p>
                    <div class="gradient-btn">
                         <a href="<?php the_field('premium_cta_url');?>"><?php the_field('premium_cta_text');?></a>
                    </div>
                </div>
                <div class="hiw_right">
                    <div class="hiw_right_inner">
                        <span class="hiw_img" data-aos="fade-left" data-aos-duration="1800">
                        <img src="<?php the_field('mobile_image_1');?>" alt="Bike_Mockup">
                    </span>
                        <span class="hiw_img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="<?php the_field('mobile_image_2');?>" alt="iPhone_mockup">
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- === How its Works end === -->

    <!-- === Brand === -->
    <div class="brand_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="">
            <div class="brand_inner">
                <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000"><?php the_field('bring_personality_heading');?></h2>
                <p data-aos="fade-up" data-aos-duration="3000"><?php the_field('bring_personality_content');?></p>
                <img data-aos="zoom-in" data-aos-duration="3000" src="<?php the_field('bring_personality_image');?>" alt="Main_Rev_transparent">
                <div class="gradient-btn">
                    <a href="<?php the_field('cta_url');?>"><?php the_field('cta_text');?></a>
                </div>
            </div>
            <div class="spot_main">
                <div class="">
                    <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php the_field('development_spot_heading');?></h2>
                    <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('development_spot_caption');?></p>
                    <div class="spot_inner">
                        <!-- for desktop -->
                        <div class="spot_left">
                            <?php if( have_rows('development_spot') ): ?>
                    <?php $i=1; while( have_rows('development_spot') ): the_row(); ?>
                            <div class="spot_left_inner">
                                <a class="step_btn" href="#tab-<?php echo $i; ?>" rel="nofollow">
                                    <h3><?php the_sub_field('heading'); ?></h3>
                                    <?php the_sub_field('content'); ?>
                                </a>
                            </div>
                           
                            <?php 
                                $i++;
                                endwhile; ?>
                                <?php endif; ?>
                            
                            
                        </div>
                        <div class="spot_right" data-aos="fade-left" data-aos-duration="1500">
                            <?php if( have_rows('development_spot') ): ?>
                    <?php $k=1; while( have_rows('development_spot') ): the_row(); ?>
                            <span id="tab-<?php echo $k; ?>" class="spot_side_img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </span>
                            <?php 
                                $k++;
                                endwhile; ?>
                                <?php endif; ?>
                        </div>
                        <!-- end desktop -->

                        <!-- for tab and mobile -->
                       <div class="mobile_nav_slider">
                            <ul>
                                <div class="slider-nav">
                                    <?php if( have_rows('development_spot') ): ?>
                                        <?php  while( have_rows('development_spot') ): the_row(); ?>
                                    <li>
                                        <div class="slider-nav_inner">
                                            <h3><?php the_sub_field('heading'); ?></h3>
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </li>
                                    <?php 
                                        endwhile; ?>
                                        <?php endif; ?>
                                    
                                </div>
                            </ul>

                            <div class="slider-for">
                                <?php if( have_rows('development_spot') ): ?>
                                    <?php  while( have_rows('development_spot') ): the_row(); ?>
                                <div class="sf_auto_width">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <?php 
                                    endwhile; ?>
                                        <?php endif; ?>
                                
                            </div>
                        </div>
                        <!-- for tab and mobile end -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- === Brand end === -->

    <!-- === Bild Native === -->
    <div class="native_mian" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="native_inner">
                <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php the_field('bild_native_heading'); ?></h2>
                <?php if( have_rows('native_steps') ): ?>
                    <?php while( have_rows('native_steps') ): the_row(); ?>
                <div class="native_step" data-aos="flip-up" data-aos-duration="3000">
                    <span class="native_step_img">
                         <img src="<?php the_sub_field('native_step_image'); ?>" alt="">
                    </span>
                    <p><?php the_sub_field('native_step_heading'); ?></p>
                </div>
                
                <?php endwhile; ?>
            <?php endif; ?>
                <div class="gradient-btn">
                    <a href="<?php the_field('cta_story_url'); ?>"><?php the_field('cta_story_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- === Bild Native end === -->

    <!-- === Modularity === -->
    <div class="modularity_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="modularity_inner">
                <h2><?php the_field('modularity_heading'); ?> </h2>
                <ul>
                <?php if( have_rows('company_logos') ): ?>
                    <?php while( have_rows('company_logos') ): the_row(); ?>
                    <li>
                        <img src="<?php the_sub_field('company_logo'); ?>" alt="">
                    </li>
                     <?php endwhile; ?>
                <?php endif; ?>
                    
                </ul>
            </div>
        </div>
    </div>

    <!-- === Modularity end === -->

    <!-- === Ready to bildit === -->
    <div class="ready_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="ready_inner">
                <div class="ready_left">
                    <h2><?php the_field('ready_to_bild_heading'); ?></h2>
                   <?php the_field('ready_to_bild_content'); ?>
                    <div class="gradient-btn mobile_ready_btn">
                         <a href="<?php the_field('cta_assessment_url'); ?>"><?php the_field('cta_assessment_text'); ?></a>
                    </div>
                    <div class="ready_buton">

                        <div class="gradient-btn">
                             <a href="<?php the_field('cta_assessment_url'); ?>"><?php the_field('cta_assessment_text'); ?></a>
                        </div>
                        <div class="gradient-btn">
                            <a href="<?php the_field('cta_demo_url'); ?>"><?php the_field('cta_demo_text'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="ready_right">
                    <!-- slider for desktop -->
                    <img data-aos="fade-left" data-aos-duration="3000" src="<?php the_field('ready_to_bild_image'); ?>" class="ready_to_buildit_img" alt="ready-to-buildit">
                    <!-- end desktop slider -->
                    <!-- build step for tab -->
                    <div class="build_step">
                        <?php if( have_rows('bildit_steps') ): ?>
                    <?php while( have_rows('bildit_steps') ): the_row(); ?>
                        <div class="build_step_inner">
                            <span>
                                <img src="<?php the_sub_field('step_image'); ?>" alt="">
                            </span>
                            <p><?php the_sub_field('bildit_step_heading'); ?></p>
                            <div class="gradient-btn">
                                <a href="<?php the_sub_field('deno_btn_url'); ?>"><?php the_sub_field('demo_btn'); ?></a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
                        
                    </div>
                    <!-- build step for tab end -->
                </div>
            </div>
        </div>
    </div>
    <!-- === Ready to bildit end === -->

    <!-- === CTA  === -->

    <div class="cta_mian" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="cta_inner">
                <h3 class="wow slideInLeft" data-wow-duration="6s"><?php the_field('contact_us_heading'); ?></h3>
                <div class="pulse-button">
                    <div class="gradient-btn">
                        <a href="<?php the_field('cta_contact_url'); ?>"><?php the_field('cta_contact_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- === CTA end === -->
<?php get_footer(); ?>