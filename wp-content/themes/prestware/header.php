<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prestware
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('class="body-wrapper"'); ?>>
    <?php wp_body_open(); ?>
    <!-- header end -->
    <header class="header header-1<?php echo ( is_front_page() || is_home() )?" transparent header-2":""?>">
        <div class="main-header-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <?php if( get_field('logos', 'option') ) : ?>
                            <?php if( !empty( get_field('logos', 'option')['mobile']['url'] ) ) : ?>
                            <div class="header-logo d-block d-xl-none">
                                <div class="logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo esc_url( get_field('logos', 'option')['mobile']['url'] );?>"
                                            alt="<?php bloginfo( 'title' ); ?>">
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>



                            <?php if( !is_front_page() && !is_home() ) : ?>
                            <?php if( !empty( get_field('logos', 'option')['light_logo']['url'] ) ) : ?>
                            <div class="social-profile last_no_bullet d-xl-block d-none">
                                <div class="header-logo">
                                    <div class="logo">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                                            <img src="<?php echo esc_url( get_field('logos', 'option')['light_logo']['url'] );?>"
                                                alt="<?php bloginfo( 'title' ); ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php else: ?>
                            <?php if( !empty( get_field('logos', 'option')['dark_logo']['url'] ) ) : ?>
                            <div class="social-profile last_no_bullet d-xl-block d-none">
                                <div class="header-logo">
                                    <div class="logo">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                                            <img src="<?php echo esc_url( get_field('logos', 'option')['dark_logo']['url'] );?>"
                                                alt="<?php bloginfo( 'title' ); ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>

                            <?php endif; ?>

                            <div class="header-menu d-none d-xl-block">
                                <div class="main-menu">
                                    <?php
									wp_nav_menu(
										array(
											'theme_location' => 'header',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
                                </div>
                            </div>

                            <div class="header-right d-flex align-items-center">
                                <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                    <div class="mobile-nav-wrap">
                                        <div id="hamburger">
                                            <i class="fal fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile menu - responsive menu  -->
    <div class="mobile-nav mobile-nav-yellow">
        <button type="button" class="close-nav">
            <i class="fal fa-times-circle"></i>
        </button>
        <nav class="sidebar-nav">
            <div class="navigation">
                <div class="consulter-mobile-nav">
                    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'header',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
                </div>
            </div>
        </nav>
    </div>
    <div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
    <!-- header end -->
    <?php if( !is_front_page() && !is_home() ) : ?>
    <div class="header-gutter"></div><!-- header end -->
    <?php endif; ?>