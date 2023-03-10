<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prestware
 */
?>



<?php if( !empty( get_field('call_to_action_text', 'option') ) ): ?>
<section class="bgcolorblack">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="font-text">
                    <h2><?php echo get_field('call_to_action_text', 'option'); ?></h2>
                </div>
            </div>
            <div class="col-md-6">
            <?php 
            $button = get_field('button', 'option');
            if( $button ): 
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <div class="mar">
                    <a class="theme-btn btn-sm btn-red" href="<?php echo esc_url( $button_url ); ?>"
                        target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?> 
                        <i class="far fa-chevron-double-right"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- footer start -->
<footer class="footer-1 footer-2 overflow-hidden">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid contact_widget">
                    <div class="single-footer-wid site_info_box">
                        <?php if( !empty( get_field('footer_logo', 'option')['url'] ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-block mb-20">
                            <img src="<?php echo esc_url( get_field('footer_logo', 'option')['url'] ); ?>"
                                alt="<?php bloginfo( 'title' ); ?>">
                        </a>
                        <?php endif; ?>

                        <?php if( !empty( get_field('about_content', 'option') ) ): ?>
                        <div class="description font-la color-white">
                            <p><?php echo get_field('about_content', 'option'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if( have_rows('social_media', 'option') ): ?>
                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="social-profile">
                            <ul>
                                <?php while( have_rows('social_media', 'option') ) : the_row(); ?>
                                <li><a
                                        href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('icon'); ?></a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <?php if( !empty( get_field('col_2_heading', 'option') ) ): ?>
                    <h4 class="wid-title mb-30 color-white"><?php echo get_field('col_2_heading', 'option');?></h4>
                    <?php endif; ?>

                    <?php if( have_rows('col_2_links', 'option') ): ?>
                    <ul>
                        <?php while( have_rows('col_2_links', 'option') ) : the_row(); ?>
                        <?php 
						$col_2_link = get_sub_field('link');
						if( $col_2_link ): 
							$col_2_link_url = $col_2_link['url'];
							$col_2_link_title = $col_2_link['title'];
							$col_2_link_target = $col_2_link['target'] ? $col_2_link['target'] : '_self';
							?>
                        <li><a href="<?php echo esc_url( $col_2_link_url ); ?>"
                                target="<?php echo esc_attr( $col_2_link_target ); ?>"><?php echo esc_html( $col_2_link_title ); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <?php if( !empty( get_field('col_3_heading', 'option') ) ): ?>
                    <h4 class="wid-title mb-30 color-white"><?php echo get_field('col_3_heading', 'option');?></h4>
                    <?php endif; ?>

                    <?php if( have_rows('col_3_links', 'option') ): ?>
                    <ul>
                        <?php while( have_rows('col_3_links', 'option') ) : the_row(); ?>
                        <?php 
						$col_3_link = get_sub_field('link');
						if( $col_3_link ): 
							$col_3_link_url = $col_3_link['url'];
							$col_3_link_title = $col_3_link['title'];
							$col_3_link_target = $col_3_link['target'] ? $col_3_link['target'] : '_self';
							?>
                        <li><a href="<?php echo esc_url( $col_3_link_url ); ?>"
                                target="<?php echo esc_attr( $col_3_link_target ); ?>"><?php echo esc_html( $col_3_link_title ); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->


            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid">
                    <?php if( !empty( get_field('col_4_heading', 'option') ) ): ?>
                    <h6 class="title d-flex align-items-center color-white mb-30">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/notification.svg"
                            alt="" class="mr-15"> <?php echo get_field('col_4_heading', 'option');?>
                    </h6>
                    <?php endif; ?>
                </div>
                <form method="post" action="http://prestware.dev.com/?na=s">
                    <div class="mb-3">
                        <input type="hidden" name="nlang" value="">
                        <input type="email" class="form-control" placeholder="Enter your email address" name="ne"
                            id="tnp-1" value="" required style="background: #000; color: #fff;">
                    </div>
                    <button type="submit" class="theme-btn btn-sm btn-red"> Subscribe Now <i
                            class="far fa-chevron-double-right"></i></button>
                </form>
            </div> <!-- /.col-lg-3 - single-footer-wid -->
        </div>
    </div>


    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div
                class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <?php if( !empty( get_field('copy_right_text', 'option') ) ): ?>
                <div class="coppyright text-center text-md-start">
                    <?php echo get_field('copy_right_text', 'option');?>
                </div>
                <?php endif; ?>

                <?php if( have_rows('links', 'option') ): ?>
                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <?php while( have_rows('links', 'option') ) : the_row(); ?>
                        <?php 
						$links = get_sub_field('link');
						if( $links ): 
							$links_url = $links['url'];
							$links_title = $links['title'];
							$links_target = $links['target'] ? $links['target'] : '_self';
							?>
                        <li><a href="<?php echo esc_url( $links_url ); ?>"
                                target="<?php echo esc_attr( $links_target ); ?>"><?php echo esc_html( $links_title ); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<?php wp_footer(); ?>
</body>

</html>