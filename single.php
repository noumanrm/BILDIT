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

	<!-- === Banner === -->
	<?php
					while ( have_posts() ) :
						the_post(); ?>
    <!-- === Banner === -->
    <div class="bildit_banner_main_blog" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="blog_back_arrow_main">
                <a href="#"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
            <div class="banner_inner">
                <h1><?php the_title(); ?> </h1>
            </div>
        </div>
    </div>
    <!-- === Banner end === -->



    <!-- === Blog Detail Start === -->
    <div class="native_blog_section">
        <div class="site_container">
            <div class="native_blog_main">
                <div class="go_native_blog_big" data-aos="zoom-in" data-aos-duration="2000">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="blog_post_info">
                <div class="blog_post_info_inner">
                    <span data-aos="zoom-in" data-aos-duration="2000"><img src="<?php the_field('author_image'); ?>" alt="matt_hudson"></span>
                    <h6><?php the_field('author_name'); ?></h6>
                    <p><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
</p>
                </div>
                <div class="blog_post_info_inner icons_mobile">
                    <a href=""><i class="far fa-bookmark"></i></a>
                    <a href=""><i class="far fa-bookmark"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="blog_feature_text_main">
        <div class="site_container">
            <div class="blog_feature_text" data-aos="fade-right" data-aos-duration="1000">
                <h2><?php the_field('post_heading'); ?></h2>
            </div>
        </div>
    </div>
    
<div class="go_native_blog_details_main">
    <div class="site_container">
        <div class="go_native_blog_details" data-aos="fade-right" data-aos-duration="1000">
                    <p><?php the_content(); ?></p>

                 <?php endwhile; ?>
        </div>
    </div>
</div>

    <div class="bildit_categories-section">
        <div class="site_container">
            <div class="bildit_categories_main" data-aos="fade-right" data-aos-duration="3000">
                <ul>
                    <?php 
                    
                            $args = array(
                            'hide_empty' => '0',
                            'post_type' => 'post', 
                           'taxonomy' => 'category',
                           'order'   => 'ASC'
                       );
                     $categories = get_categories($args);
                     foreach ($categories as $category) {  
                       
                        ?>
                    <li><a href="<?php echo $category->slug ?>"><?php echo $category->cat_name; ?></a></li>
                            <?php  } ?>

                   
                </ul>
            </div>

        </div>

    </div>
    <!-- === Blog Detail End === -->

    <!-- === Writer End === -->
    <div class="writer_main">
        <div class="site_container">
            <div class="writer_main_inner">
                <div class="writer_main_inner_left">
                    <span>Written by</span>
                    <div class="writer_info_main">
                        <div class="writer_info_left">
                            <span class="writer_image"><img src="<?php the_field('author_image'); ?>" alt="matt_hudson"></span>
                        </div>
                        <div class="writer_info_right">
                            <span><?php the_field('author_name'); ?></span>
                            <p><?php the_field('author_designation'); ?></p>
                            <div class="writer_social_icon">
                                 <?php  
                                    if( have_rows('author_social_urls') ): ?>
                                        <?php  while( have_rows('author_social_urls') ): the_row(); ?>
                                <a href="<?php the_sub_field('social_url'); ?>"><i class="fab fa-<?php the_sub_field('social_name'); ?>"></i></a>
                                            <?php 
                                    endwhile; ?>
                                    <?php endif; ?>
                                
                            </div>

                        </div>

                    </div>
                    <p><?php the_field('author_bio'); ?> </p>

                </div>

                <div class="writer_main_inner_right">
                    <p>Share this article</p>
                    <div class="writer_social_main">
                        <div class="writer_social_icon_article">
                           <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                        </div>
                       <?php //echo do_shortcode('[Sassy_Social_Share]') ?>
                        <div class="blog_fav">
                            <a href="#"><i class="far fa-bookmark"></i></a>
                            <p>Bookmark</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- === Writer End === -->

    <!-- === Other Insights === -->
    <div class="other_insights_sec">
        <div class="site_container">
            <div class="other_insights_main">
                <h2>Other Insights</h2>
                <div class="highlight_main_blog_lower">
                    <?php 

                    $args = array(
                            'posts_per_page' => 2, /* how many post you need to display */
                            'offset' => 0,
                            'orderby' => 'post_date',
                            'order' => 'ASC',
                            'post_type' => 'post', /* your post type name */
                            'post_status' => 'publish'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                     ?>
                    <div class="highlight_blog_lower" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="highlight_img1">
                            <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
                        </div>
                        <span><?php the_category(', '); ?></span><span> • <?php echo get_the_date('F j, Y'); ?></span>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                    </div>
                    <?php
                    endwhile;
                endif;
                ?> 
                   
                </div>
            </div>
        </div>
    </div>



    <!-- === Other Insights End === -->

    <!-- === Newslettter=== -->
    <div class="newsletter_main newsletter_main_blog" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="newsletter_inner">
                <h2 class="newsletter_heading">Sign Up For Newsletters</h2>
                <div class="newsletter_fields_main">
                    <form class="newsletter_form">
                        <input type="text" placeholder="Email address" name="mail" class="subscribe_input" required>
                        <div class="subscribe_btn">
                            <div class="plain-btn">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <!-- === Newslettter end=== -->

<?php

get_footer();
