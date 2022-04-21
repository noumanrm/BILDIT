<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bildit
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></title>
    <!-- === css files === -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- === Header === -->
    <header>
        <div class="site_header">
            <div class="site_container">
                <div class="header_inner">
                    <div class="nav-menu-icon">
                        <img src="<?php bloginfo('template_url'); ?>/images/Menu-mob.svg" alt="Menu-mob">
                    </div>
                    <span class="site_logo">
                     <a href="<?php echo get_site_url(); ?>"><img src="<?php the_field('site_logo','options'); ?>" alt="BildIt"></a>
                 </span>
                    <div class="menu-cross-mark">
                        <span class="nav-close-icon">
                    <i class="fas fa-times"></i>
                </span>
                        <?php wp_nav_menu( array(
                        'menu' => 'Header Menu'
                    ) ); ?>
                    </div>
                    <div class="header_btn">
                        <div class="gradient-btn">
                            <a href="<?php the_field('schedule_a_demo_url','options'); ?>"><?php the_field('schedule_a_demo','options'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- === Header end === -->