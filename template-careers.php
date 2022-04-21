<?php
/**
 Template Name: Careers Page
 */

get_header();
?>
     <!-- === banner === -->
    <div class="careers_banner" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="careers_banner_inner">
                <div class="cbi_left">
                    <div class="banner_blog_imgs_main">
                        <div class="banner_blog_imgs">
                            <h2><?php the_field('banner_heading'); ?></span></h2>
                        </div>
                    </div>
                    <p><?php the_field('banner_caption'); ?></p>
                    <div class="gradient-btn">
                        <a href="<?php the_field('banner_cta_url'); ?>"><?php the_field('banner_cta_text'); ?></a>
                    </div>
                </div>
                <div class="cbi_right">

                    <?php  $m  =   1; 
                    if( have_rows('banner_images') ): ?>
                        <?php  while( have_rows('banner_images') ): the_row(); ?>
                            <?php
                          if($m==1):
                          $class    =   'Left pulse';
                          elseif($m==2):
                          $class    =   'Right';
                          elseif($m==3):
                          $class    =   'Botton';
                         
                          else:
                          $class    =   'Left pulse';
                          endif; ?>
                    <span class="careers_banner_img<?php echo $class; ?>">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </span>
                    <?php 
                    $m++;
                        endwhile; ?>
                        <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- === banner end === -->

    <!-- === company work === -->
    <div class="company_main">
        <div class="site_container">
            <div class="company_inner careers_font_size">
                <div class="comapny_left" data-aos="fade-right" data-aos-duration="3000">
                    <h3><?php the_field('company_heading'); ?></h3>
                    <h2><?php the_field('why_work_heading'); ?></h2>
                    <?php the_field('why_work_caption'); ?>
                </div>
                <div class="comapny_right" data-aos="fade-left" data-aos-duration="3000">
                    <?php  
                    if( have_rows('company_work') ): ?>
                        <?php  while( have_rows('company_work') ): the_row(); ?>
                    <div class="company_work">
                        <span>
                            <img src="<?php the_sub_field('logo'); ?>" alt="">
                        </span>
                        <h2><?php the_sub_field('heading'); ?></h2>
                        <?php the_sub_field('content'); ?>
                    </div>
                    <?php 
                        endwhile; ?>
                        <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- === company work end === -->


    <!-- === compensation  === -->

    <div class="compensation_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="compensation_inner careers_font_size">
                <h3><?php the_field('compensation_heading'); ?></h3>
                <h2><?php the_field('perks_and_benefits_heading'); ?></h2>
                <?php the_field('perks_and_benefits_caption'); ?>
                <div class="perks_benifits">
                    <ul>
                        <?php  
                    if( have_rows('perks_benefits') ): ?>
                        <?php  while( have_rows('perks_benefits') ): the_row(); ?>
                        <li data-aos="fade-up" data-aos-duration="3000">
                            <span class="combine_text">
                                <img src="<?php bloginfo('template_url'); ?>/images\PaidTimeOff-icon.png">
                                <h2><?php the_sub_field('number'); ?></h2>
                                <h2><?php the_sub_field('number'); ?></h2>
                            </span>

                            <p><?php the_sub_field('heading'); ?></p>
                        </li>
                        <?php 
                        endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- === compensation  end === -->

    <!-- === WFH  === -->
    <div class="wfh_main">
        <div class="wfh_inner careers_font_size">
            <div class="wfh_left" data-aos="fade-right" data-aos-duration="3000">
                <h3><?php the_field('office_heading'); ?></h3>
                <h2><?php the_field('work_heading'); ?></h2>
                <p><?php the_field('work_caption'); ?></p>
                <ul>
                    <?php  
                    if( have_rows('country_locations') ): ?>
                        <?php  while( have_rows('country_locations') ): the_row(); ?>
                    <li><?php the_sub_field('country'); ?></li>
                    <?php 
                        endwhile; ?>
                        <?php endif; ?>
                    
                </ul>
            </div>
            <div class="wfh_right" data-aos="zoom-in" data-aos-duration="3000">
                <img src="<?php the_field('section_image'); ?>" alt="">
            </div>
        </div>
    </div>
    <!-- === WFH  end === -->

    <!-- === joining us  === -->
    <div class="join_main_body">
        <div class="join_main">
            <div class="site_container">
                <div class="join_inner careers_font_size">
                    <h3>AVAILABLE POSITIONs</h3>
                    <h2>Interesting in Joining Us?</h2>
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