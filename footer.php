<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bildit
 */

?>

   
<!-- === footer === -->
    <footer>
        <div class="footer_main">
            <div class="site_container">
                <div class="upper_footer">
                    <ul>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">All Features</a></li>
                        <li><a href="#">Sample App</a></li>
                        <li><a href="#">CMS</a></li>
                        <li><a href="#">Native Checkout</a></li>
                        <li><a href="#">The Customer Experience</a></li>
                        <li><a href="#">Case Studies</a></li>

                    </ul>
                </div>
                <div class="bottom_footer">
                    <div class="bf_left">
                        <span>
                            <a href="<?php echo get_site_url(); ?>">
                              <img src="<?php the_field('footer_logo','options'); ?>" alt="B_icon">
                           </a>
                       </span>
                        <p><?php the_field('copy_right','options'); ?></p>
                    </div>
                    <div class="bf_right">
                        <ul>
                             <?php  
                    if( have_rows('bottom_menu','options') ): ?>
                        <?php  while( have_rows('bottom_menu','options') ): the_row(); ?>
                            <li><a href="<?php the_sub_field('menu_url','options'); ?>"><?php the_sub_field('menu_text','options'); ?></a></li>

                            <?php 
                        endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- === footer end === -->




    <!-- === js files === -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>

</html>