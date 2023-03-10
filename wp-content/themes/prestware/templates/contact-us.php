<?php

/**
 * Template Name: Contact Us
 *
 */

get_header(); ?>

<!-- page-banner start -->
<section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                    <div class="page-title">
                        <!-- <h1 class="talenttitale"> Recruiting <span> Services </span> </h1> -->
                        <h1 class="talenttitale"><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->



<?php if( have_rows('sections') ) : ?>
<?php while ( have_rows('sections') ) : the_row(); ?>


<?php if( get_row_layout() == 'contact_info' ) : ?>
<section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us__content">
                    <?php if( !empty( get_sub_field('content_group')['tag_line'] ) ): ?>
                    <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/badge-line-yellow.svg" class="img-fluid mr-10" alt=""> 
                        <?php echo get_sub_field('content_group')['tag_line'];?>
                    </h6>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('content_group')['heading'] ) ): ?>
                    <h3 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">
                        <?php echo get_sub_field('content_group')['heading'];?>
                    </h3>
                    <?php endif; ?>


                    <?php if( !empty( get_sub_field('content_group')['description'] ) ): ?>
                    <div class="description font-la">
                        <p><?php echo get_sub_field('content_group')['description'];?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if( have_rows('contact_information') ): ?>
                
            <div class="col-lg-6">
                <?php while( have_rows('contact_information') ) : the_row(); ?>
                <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">

                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>

                                <h5 class="title color-d_black">Lorem, ipsum. Office</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                                4517 Lorem, ipsum dolor sit amet consectetur adipisicing. 39495
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-home-location"></i>
                                </div>

                                <h5 class="title color-d_black">Lorem, ipsum. Office</h5>
                            </div>

                            <div class="contact-us__item-body font-la">
                                4517 Lorem, ipsum dolor sit amet consectetur adipisicing. 39495
                            </div>
                        </div>
                    </div>

                    
                    <?php if( empty( get_sub_field('phone_1') ) && empty( get_sub_field('phone_2') ) ): ?>
                    <?php else: ?>
                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40">
                            <div
                                class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-phone"></i>
                                </div>
                                <h5 class="title color-d_black">Call Us Toll Free</h5>
                            </div>
                            <div class="contact-us__item-body font-la">
                                <ul>
                                    <?php if( !empty( get_sub_field('phone_1') )): ?>
                                    <li><a href="tel:<?php echo get_sub_field('phone_1'); ?>"><?php echo get_sub_field('phone_1'); ?></a></li>
                                    <?php endif; ?>
                                    <?php if( !empty( get_sub_field('phone_2') )): ?>
                                    <li><a href="tel:<?php echo get_sub_field('phone_2'); ?>"><?php echo get_sub_field('phone_2'); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( empty( get_sub_field('email_1') ) && empty( get_sub_field('email_2') ) ): ?>
                    <?php else: ?>
                    <div class="col-sm-6">
                        <div class="contact-us__item mb-40">
                            <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                <div class="icon mr-10 color-primary">
                                    <i class="icon-email"></i>
                                </div>
                                <h5 class="title color-d_black">Email Us</h5>
                            </div>
                            <div class="contact-us__item-body font-la">
                                <ul>
                                    <?php if( !empty( get_sub_field('email_1') )): ?>
                                    <li><a href="mailto:<?php echo get_sub_field('email_1'); ?>"><?php echo get_sub_field('email_1'); ?></a></li>
                                    <?php endif; ?>
                                    <?php if( !empty( get_sub_field('email_2') )): ?>
                                    <li><a href="mailto:<?php echo get_sub_field('email_2'); ?>"><?php echo get_sub_field('email_2'); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-12">
                <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'form_map_section' ) : ?>
<section class="contact-form  mb-xs-80 mb-sm-100 mb-md-100 mb-120 overflow-hidden">
    <div class="container">
        <div class="row">
        <?php if( have_rows('form_group') ): ?>
            <?php while( have_rows('form_group') ) : the_row(); ?>
            <div class="col-6">
                <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85">
                    <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                        <?php if( !empty( get_sub_field('tag_line') ) ):?>
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-15">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/badge-line-yellow.svg" class="img-fluid mr-10" alt="">
                            <?php echo get_sub_field('tag_line'); ?>
                        </h6>
                        <?php endif; ?>

                        <?php if( !empty( get_sub_field('heading') ) ):?>
                        <h3 class="title color-d_black"><?php echo get_sub_field('heading'); ?></h3>
                        <?php endif; ?>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="'.get_sub_field('form').'"]'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( !empty( get_sub_field('map') ) ):?>
            <div class="col-6">
                <?php echo get_sub_field('map');?>
            </div>
        <?php endif; ?>
        
        </div>
    </div>
</section>
<?php endif; ?>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>