<?php

/**
 * Template Name: Recruiting Services
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
                        <h1 class="talenttitale"> <?php the_title();?> </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-banner end -->



<?php if( have_rows('sections') ) : ?>
<?php while ( have_rows('sections') ) : the_row(); ?>

<?php if( get_row_layout() == 'image_content_section' ) : ?>

<section class="why-choose pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <?php if( !empty( get_sub_field('image')['url'] ) ): ?>
                <div class="why-choose__media-wrapper d-flex flex-column">
                    <div class="gallery-bar bg-yellow"></div>
                    <div class="why-choose__media">
                        <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>" class="img-fluid">
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-6">
            <?php if( !empty( get_sub_field('content') ) ): ?>
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <p class="talentsecound"><?php echo get_sub_field('content'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if( have_rows('box') ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="why-choose__item-wrapper why-choose__item-two-wrapper d-grid justify-content-between mt-60 mt-md-50 mt-sm-40 mt-xs-30">
                    <?php while( have_rows('box') ) : the_row(); ?>
                    <div class="why-choose__item why-choose__item-two"
                        style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/why-choose__item-two-overly.png);">
                        <?php if( !empty( get_sub_field('icon')['url'] ) ):?>
                        <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                            <img src="<?php echo get_sub_field('icon')['url'];?>" />
                        </div>
                        <?php endif; ?>

                        <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"><?php echo get_sub_field('title');?></h6>
                        <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                            <p style="text-align: justify;"><?php echo get_sub_field('details');?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'plans_section' ) : ?>
<section
    class="similar-work services-work bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-135 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="employee-friendly__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                    <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                    <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-details/badge-line-yellow.svg"
                        class="img-fluid mr-10" alt=""> <?php echo get_sub_field('tag_line');?></span>
                    <?php endif; ?>
                    <?php if( !empty( get_sub_field('heading') ) ): ?>
                    <h2 class="title color-d_black"><?php echo get_sub_field('heading');?></h2>
                    <?php endif; ?>
                    <?php if( !empty( get_sub_field('description') ) ): ?>
                    <p><?php echo get_sub_field('description');?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if( have_rows('boxes') ): ?>
            <div class="row mb-minus-30">
            <?php while( have_rows('boxes') ) : the_row(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="similar-work__item mb-30 d-flex justify-content-between flex-column">
                    <div class="top d-flex align-items-center">
                        <?php if( !empty(get_sub_field('icon')['url']) ):?>
                        <div class="icon color-white text-center bg-yellow">
                            <img src="<?php echo get_sub_field('icon')['url']; ?>" />
                        </div>
                        <?php endif; ?>
                        <h4 class="title color-secondary"><?php echo get_sub_field('title'); ?></h4>
                    </div>

                    <?php if( have_rows('points') ): ?>
                        <div class="bottom">
                            <div class="text pt-10 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la"
                            style="height: 470px;">
                            <ul class="listli">
                                <?php while( have_rows('points') ) : the_row(); ?>
                                <li>
                                <?php echo get_sub_field('point'); ?>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>

                        <div class="theme-btn text-center fw-600 btn-yellow"></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'content_section' ) : ?>
<section
    class="why-choose why-choose__home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <?php if( !empty( get_sub_field('heading') ) ): ?>
                <div class="why-choose__content why-choose__content-home">
                    <div class="why-choose__text">
                        <h2 class="title color-pd_black"><?php echo get_sub_field('heading');?></h2>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
            <?php if( !empty( get_sub_field('content') ) ): ?>
                <div class="why-choose__content why-choose__content-home mt-md-25 mt-sm-20 mt-xs-20">
                    <div class="description font-la">
                    <?php echo get_sub_field('content');?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>