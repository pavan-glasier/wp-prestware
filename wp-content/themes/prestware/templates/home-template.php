<?php

/**
 * Template Name: Home Page
 *
 */

get_header(); ?>
<?php if( have_rows('sections') ) : ?>
<?php while ( have_rows('sections') ) : the_row(); ?>

<?php if( get_row_layout() == 'slider_section' ) : ?>
<!-- banner slider start -->
<?php if( have_rows('slide') ): ?>
<section class="banner-slider__wrapper pt-0 pb-0 overflow-hidden">
    <div class="slider-controls">
        <div class="banner-slider-arrows d-flex flex-column"></div>
    </div>
    <div class="banner-slider overflow-hidden">
        <?php while( have_rows('slide') ) : the_row(); ?>
        <div class="slider-item"
            style="background-image: url(<?php echo esc_url( get_sub_field('image')['url'] ); ?>);">
            <div class="number" data-animation="fadeInUp" data-delay="0.6s">
                <?php echo ( get_row_index()>9 )?get_row_index():"0".get_row_index() ?></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if( have_rows('contents') ): ?>
                        <?php while( have_rows('contents') ) : the_row(); ?>
                        <div class="banner__content text-center">
                            <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp"
                                data-delay="0.5s"><?php echo get_sub_field('tag_line');?></h6>
                            <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                data-delay="1s"><?php echo get_sub_field('title');?></h1>

                            <?php if( have_rows('buttons') ): ?>
                            <div class="theme-btn__wrapper d-flex justify-content-center">
                                <?php while( have_rows('buttons') ) : the_row(); ?>
                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                <a href="<?php echo esc_url( $link_url ); ?>"
                                    class="theme-btn btn-sm<?php echo ( get_row_index()>1 )?" btn-white":"" ?>"
                                    data-animation="fadeInUp" data-delay="1.3s"
                                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
                                    <i class="fas fa-long-arrow-alt-right"></i></a>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>

                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

    </div>
</section>
<!-- banner slider end -->
<?php endif; ?>
<?php endif; ?>




<?php if( get_row_layout() == 'about_section' ) : ?>
<!--About Us-->
<section class="our-company pb-xs-80 pb-100 overflow-hidden pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <div class="our-company__meida border-radius">
                    <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="" class="img-fluid">
                    <div class="horizental-bar bg-red"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                    <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/line.png"
                            class="img-fluid mr-10" alt="">
                        <?php echo get_sub_field('content_group')['tagline']; ?></span>
                    <h2 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">
                        <?php echo get_sub_field('content_group')['heading']; ?>
                    </h2>

                    <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                        <?php echo get_sub_field('content_group')['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'service_section' ) : ?>
<!--Services-->
<section class="work-process pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pb-100 overflow-hidden">
    <div class="container">
        <?php if( empty( get_sub_field('tag_line') ) && empty( get_sub_field('heading') ) ): ?>
        <?php else: ?>
        <div class="row">
            <div class="col-12">
                <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center">
                    <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                    <span
                        class="sub-title d-block fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/line.png"
                            class="img-fluid mr-10" alt=""><?php echo get_sub_field('tag_line'); ?></span>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('heading') ) ): ?>
                    <h2 class="title color-d_black"><?php echo get_sub_field('heading'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( have_rows('box') ): ?>
        <div class="row mb-minus-30">
            <?php while( have_rows('box') ) : the_row(); ?>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="work-process__item mb-70 text-center">
                    <?php if( !empty( get_sub_field('icon')['url'] ) ): ?>
                    <div class="icon mx-auto">
                        <img src="<?php echo get_sub_field('icon')['url']; ?>" />
                    </div>
                    <?php endif; ?>

                    <div class="text" style="padding: 74px 28px 20px 28px;">
                        <?php if( !empty( get_sub_field('title') ) ): ?>
                        <h4 class="title color-secondary mb-15 mb-sm-10 mb-xs-5">
                            <?php echo get_sub_field('title'); ?>
                        </h4>
                        <?php endif; ?>

                        <?php if( have_rows('points') ): ?>
                        <div class="description font-la">
                            <ul class="serviceslistul">
                                <?php while( have_rows('points') ) : the_row(); ?>
                                <li> <a href="#"><?php echo get_sub_field('point'); ?></a> </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php 
                        $box_link = get_sub_field('link');
                        if( $box_link ): 
                            $box_link_url = $box_link['url'];
                            $box_link_title = $box_link['title'];
                            $box_link_target = $box_link['target'] ? $box_link['target'] : '_self';
                            ?>
                    <a href="<?php echo esc_url( $box_link_url ); ?>" class="btn btn-buttonround"
                        target="<?php echo esc_attr( $box_link_target ); ?>">
                        <?php echo esc_html( $box_link_title ); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>



<?php if( get_row_layout() == 'client_testimonial' ) : ?>
<?php if( get_sub_field('testimonial_show') ) : ?>
<!--testimonual-->
<section
    class="testimonial bg-dark_yellow pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-9">
                <?php if( empty( get_sub_field('tag_line') ) && empty( get_sub_field('heading') ) ): ?>
                <?php else: ?>
                <div class="employee-friendly__content">
                    <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/badge-line-yellow.svg"
                            class="img-fluid mr-10" alt=""><?php echo get_sub_field('tag_line'); ?></span>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('heading') ) ): ?>
                    <h2 class="title color-secondary"><?php echo get_sub_field('heading'); ?></h2>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-sm-3">
                <div class="slider-controls mt-xs-15">
                    <div class="testimonial-slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                </div>
            </div>
        </div>
        <?php 
      $testi_args = array(
         'post_type' => 'testimonials',
         'order' => 'DESC',
         'posts_per_page' => -1,
         ); 
         ?>
        <?php $testi_query = new WP_Query($testi_args);
         if ($testi_query->have_posts()) : ?>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-home-2 mt-65 mt-md-50 mt-sm-40 mt-xs-30">
                    <?php while ($testi_query->have_posts()) : $testi_query->the_post(); ?>
                    <div class="slider-item">
                        <div class="testimonial__item testimonial-item-two">
                            <div
                                class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                <div class="left d-flex align-items-center">
                                    <?php if( !empty( get_field('profile_image')['url'] ) ): ?>
                                    <div class="media overflow-hidden">
                                        <img src="<?php echo esc_url( get_field('profile_image')['url'] ); ?>"
                                            class="img-fluid"
                                            alt="<?php echo esc_attr( get_field('profile_image')['alt'] ); ?>">
                                    </div>
                                    <?php endif; ?>
                                    <div class="meta">
                                        <h6 class="name fw-500 text-uppercase color-d_black"><?php the_title();?></h6>
                                        <span
                                            class="position font-la fw-500 color-d_black"><?php echo esc_html( get_field('designation') ); ?></span>
                                    </div>
                                </div>
                                <div class="right">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                <?php echo get_the_content();?>
                            </div>
                            <?php if( !empty( get_field('logo')['url'] ) ): ?>
                            <div class="testimonial__item-footer d-flex justify-content-between">
                                <div class="socail-link">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo esc_url( get_field('logo')['url'] ); ?>"
                                                    alt="<?php echo esc_attr( get_field('logo')['alt'] ); ?>">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php if( get_row_layout() == 'why_choose_section' ) : ?>
<!--Developing solution future-->
<section class="why-choose pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose__media-wrapper d-flex flex-column">
                    <?php if( !empty( get_sub_field('image')['url'] ) ): ?>
                    <div class="gallery-bar bg-yellow"></div>
                    <div class="why-choose__media">
                        <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="" class="img-fluid">
                    </div>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('global_country') ) ): ?>
                    <div class="global-country text-center bg-yellow">
                        <div class="number mb-5 color-white">
                            <span
                                class="counter"><?php echo get_sub_field('global_country')['number'];?></span><?php echo get_sub_field('global_country')['affix'];?>
                        </div>
                        <h6 class="title color-white font-la"><?php echo get_sub_field('global_country')['title'];?>
                        </h6>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-xl-6">
                <?php if( have_rows('content_group') ): ?>
                <?php while( have_rows('content_group') ) : the_row(); ?>
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                        <span
                            class="sub-title d-block fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/badge-line-yellow.svg"
                                class="img-fluid mr-10" alt=""><?php echo get_sub_field('tag_line'); ?></span>
                        <?php endif; ?>

                        <?php if( !empty( get_sub_field('heading') ) ): ?>
                        <h2 class="title color-pd_black"><?php echo get_sub_field('heading'); ?></h2>
                        <?php endif; ?>

                        <?php if( !empty( get_sub_field('contents') ) ): ?>
                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <p><?php echo get_sub_field('contents'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if( have_rows('features') ): ?>
                    <div class="why-choose__item-wrapper d-grid justify-content-between">
                        <?php while( have_rows('features') ) : the_row(); ?>

                        <div class="why-choose__item">
                            <?php if( !empty( get_sub_field('icon')['url'] ) ): ?>
                            <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                <img src="<?php echo get_sub_field('icon')['url']; ?>"
                                    alt="<?php echo get_sub_field('icon')['alt']; ?>" />
                            </div>
                            <?php endif; ?>

                            <?php if( !empty( get_sub_field('title') ) ): ?>
                            <h5 class="title color-secondary fw-500 mb-10"><?php echo get_sub_field('title'); ?></h5>
                            <?php endif; ?>

                            <?php if( !empty( get_sub_field('details') ) ): ?>
                            <div class="description font-la">
                                <p><?php echo get_sub_field('details'); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'counter_section' ) : ?>
<?php if( have_rows('counter') ): ?>
<div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
    <div class="container">
        <div class="row mb-minus-30">
            <?php while( have_rows('counter') ) : the_row(); ?>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                    <div class="icon color-yellow">
                        <img src="<?php echo get_sub_field('icon')['url']; ?>" />
                    </div>
                    <div class="text text-center">
                        <div class="number fw-600 color-yellow">
                            <span class="counter"><?php echo get_sub_field('number'); ?></span>
                            <?php echo get_sub_field('affix'); ?>
                        </div>
                        <div class="description font-la"><?php echo get_sub_field('title'); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if( get_row_layout() == 'call_to_action_section' ) : ?>
<!--consultation form-->
<div class="can-help-overly-home overflow-hidden">
    <div class="can-help-overly">
        <div class="container"></div>
    </div>
    <section
        class="can-help can-help-home-1 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 overflow-hidden">
        <div class="can-help-background"
            style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets//img/can-help-background.png)">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-7">
                    <?php if( have_rows('content_group') ): ?>
                    <?php while( have_rows('content_group') ) : the_row(); ?>
                    <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50">
                        <?php if( !empty( get_sub_field('heading') ) ): ?>
                        <h2 class="title color-white mb-sm-15 mb-xs-10 mb-20">
                            <?php echo get_sub_field('heading'); ?>
                        </h2>
                        <?php endif; ?>

                        <?php if( !empty( get_sub_field('description') ) ): ?>
                        <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-40 color-white">
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                        <?php endif; ?>

                        <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                            <?php if( !empty( get_sub_field('phone') ) ): ?>
                            <a href="tel:<?php echo get_sub_field('phone'); ?>"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon color-red">
                                    <i class="icon-call"></i>
                                    <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-white">Call Us Everyday</span>
                                    <h5 class="fw-500 color-white"><?php echo get_sub_field('phone'); ?></h5>
                                </div>
                            </a>
                            <?php endif; ?>

                            <?php if( !empty( get_sub_field('email') ) ): ?>
                            <a href="mailto:<?php echo get_sub_field('email'); ?>"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon color-red">
                                    <i class="icon-email-1"></i>
                                    <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-white">Email Drop Us</span>
                                    <h5 class="fw-500 color-white"><?php echo get_sub_field('email'); ?></h5>
                                </div>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-xl-5">
                    <?php if( have_rows('form_group') ): ?>
                    <?php while( have_rows('form_group') ) : the_row(); ?>
                    <div
                        class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85">
                        <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                            <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                            <h6 class="sub-title fw-500 color-red text-uppercase mb-15">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/line.png"
                                    class="img-fluid mr-10" alt=""> <?php echo get_sub_field('tag_line'); ?>
                            </h6>
                            <?php endif; ?>

                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                            <h3 class="title color-d_black"><?php echo get_sub_field('heading'); ?></h3>
                            <?php endif; ?>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="'.get_sub_field('form').'"]'); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</div>
<?php endif; ?>


<?php if( get_row_layout() == 'blog_section' ) : ?>
<?php if( get_sub_field('blogs_show') ) : ?>
<section class="employee-friendly pt-xs-80 pt-sm-100 pt-md-100 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-9">
                <?php if( empty( get_sub_field('tag_line') ) && empty( get_sub_field('heading') ) ): ?>
                <?php else: ?>
                <div class="employee-friendly__content">
                    <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                    <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/badge-line-yellow.svg"
                            class="img-fluid mr-10" alt=""><?php echo get_sub_field('tag_line'); ?></span>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('heading') ) ): ?>
                    <h2 class="title color-d_black"><?php echo get_sub_field('heading'); ?></h2>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-sm-3">
                <div class="slider-controls mt-sm-30">
                    <div class="slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                </div>
            </div>
        </div>
        <?php 
      $blogs_args = array(
         'post_type' => 'post',
         'order' => 'DESC',
         'posts_per_page' => -1,
         ); 
         ?>
        <?php $blogs_query = new WP_Query($blogs_args);
         if ($blogs_query->have_posts()) : ?>
        <div class="row">
            <div class="col-12">
                <div class="employee-friendly__slider mt-65 mt-md-50 mt-sm-40 mt-xs-30">
                    <?php while ($blogs_query->have_posts()) : $blogs_query->the_post(); ?>

                    <div class="slider-item">
                        <div class="blog-item blog-item-three mb-30">
                            <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                                <div class="media overflow-hidden">
                                    <?php 
                                    if ( has_post_thumbnail() ) { ?>
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-fluid" />
                                    <?php }
                                    else { ?>
                                        <img src="<?=site_url();?>/wp-content/uploads/2023/03/no-image.jpg" class="img-fluid" >
                                    <?php }
                                    ?>
                                </div>
                                <div class="date">
                                    <span><?php echo get_the_date( 'd', $post->ID ); ?></span>
                                    <span><?php echo get_the_date( 'M', $post->ID ); ?></span>
                                    <span><?php echo get_the_date( 'Y', $post->ID ); ?></span>
                                </div>
                            </div>

                            <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pb-30 pl-30">
                            <?php $category_detail = get_the_category($post->ID); ?>
                            <div class="post-author mb-5">
                                    <?php foreach($category_detail as $cd) : ?>
                                        <a href="<?php echo esc_url( get_category_link( $cd->term_id ) );?>"><?php echo $cd->cat_name;?></a>
                                    <?php endforeach; ?>
                                </div>

                                <h4><a href="<?php the_permalink();?>"><?php echo the_title();?></a></h4>

                                <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                    <a href="<?php the_permalink();?>" class="theme-btn btn-border">Read More <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>