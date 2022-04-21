<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bildit
 */

get_header();
?>

	<!-- === Banner === -->
    <div class="bildit_banner_main_blog" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="banner_inner banner_blog_position">
                <div class="banner_blog_imgs">
                    <h2>bild<span class="pink_it">it</span><span class="next_text">Blog</span></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- === Banner end === -->



    <!-- === Buildit highlight === -->
    <div class="main-highlight">
        <div class="site_container">
            <div class="buildit-highlight-main-section" data-aos="fade-up" data-aos-duration="3000">
                <h1><strong>BILDIT</strong> HIGHLIGHT</h1>

                <div class="highlight_main_blog_upper">
                	 <?php
				  $args = array(
				  		
				        'posts_per_page' => 1,
				        'meta_key' => '_is_ns_featured_post',
				        'meta_value' => 'yes'
				    );
				    $featured = new WP_Query($args);
				 
				if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
                    <div class="highlight_main_blog">
                    	<?php if (has_post_thumbnail()) : ?>
                        <div class="go_native_img">
                        <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="highlight_main_blog">
                        <span><?php the_category(', '); ?> • <?php echo get_the_date('F j, Y'); ?></span>
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2> 
                        </a>
                        <p><?php the_excerpt();?></p>
                    </div>
                    <?php
					
					endwhile; else:
					endif;
					?>
                </div>
                <div class="highlight_main_blog_lower">
                	
             <?php $loop = new WP_Query( array(  'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '2', 'meta_query' => array(
				        array(
				            'key'     => '_is_ns_featured_post',
				            'value'   => 'yes',
				            'compare' => 'NOT EXISTS',
				        ),
    
   						), 
				         ) ); 

				    ?>
            <?php while( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="highlight_blog_lower" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="highlight_img1">
                            <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
                        </div>
                        
                        <span><?php the_category(', '); ?> • <?php echo get_the_date('F j, Y'); ?></span>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt();?></p>
                    </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                        
                    
                </div>
            </div>
        </div>
    </div>


    <!-- === Buildit highlight end === -->

    <!-- === Newslettter=== -->
    <div class="newsletter_main mobile_newsletter_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="newsletter_inner">
                <h2>Sign Up For Newsletters</h2>
                <div class="newsletter_fields_main">
                    <form class="newsletter_form">
                        <input type="text" placeholder="Email address" name="mail" class="email_input" required>
                        <div class="newsletter_btn">
                            <div class="gradient-btn">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <!-- === Newslettter end=== -->

    <!-- === Bilit Latest=== -->
    <div class="biltit_latest_main" data-aos="fade-up" data-aos-duration="3000">
        <div class="site_container">
            <div class="bilit_main_inner">

                <div class="bildit_latest_left_main">

                    <h2 class="highlight-heading"><strong>BILDIT</strong> LATEST</h2>
                    <?php 

					$args = array(
					        'posts_per_page' => 3, /* how many post you need to display */
					        'offset' => 3,
					        'orderby' => 'post_date',
					        'order' => 'ASC',
					        'post_type' => 'post', /* your post type name */
					        'post_status' => 'publish'
					    );
					    $query = new WP_Query($args);
					    if ($query->have_posts()) :
					        while ($query->have_posts()) : $query->the_post();
                     ?>
                    <div class="bilit_latest_main_inner" data-aos="fade-right" data-aos-duration="1000">
                        <div class="bild_it_main_inner">

                            <span><?php the_category(', '); ?></span><span> • <?php echo get_the_date('F j, Y'); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                            <div class="latest_blog_img1">
                                <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
			        endwhile;
			    endif;
			    ?> 
                </div>


                <div class="bildit_latest_right_main">
                    <h2><strong>BILDIT</strong> CATEGORIES</h2>
                    <div class="bildit_categories_main">
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
                            <!--<li><a href="<?php echo $category->slug ?>"><?php echo $category->cat_name; ?></a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Project Management</a></li>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Software Engineering</a></li>
                            <li><a href="#">Startups</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

get_footer();
