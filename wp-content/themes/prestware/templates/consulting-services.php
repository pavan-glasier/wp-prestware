<?php

/**
 * Template Name: Consulting Services
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
                        <!-- <h1 class="talenttitale"> Consulting <span> Services </span> </h1> -->
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
            <div class="col-xl-6">
                <?php if( !empty( get_sub_field('content') ) ): ?>
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <?php echo get_sub_field('content'); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-4 offset-md-1">
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
        </div>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'content_section' ) : ?>
<section class="financial pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pb-80 overflow-hidden">
    <div class="container">
        <?php if( !empty( get_sub_field('heading') ) ): ?>
        <div class="row mb-50">
            <div class="col-md-12">
                <h2 class="text-center"><?php echo get_sub_field('heading'); ?></h2>
            </div>
        </div>
        <?php endif; ?>

        <?php if( have_rows('points') ): ?>
        <div class="row mb-minus-30">
            <div class="col-xl-12 col-md-12">
                <div class="financial__item d-flex mb-30"
                    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/financial__item-bg.png);">
                    <div class="text">
                        <ul class="alllilistblock">
                            <?php while( have_rows('points') ) : the_row(); ?>
                            <li>
                                <div class="listbox">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/listarrow.png"
                                        class="arroimg">
                                    <p>
                                        <?php if( !empty( get_sub_field('title') ) ): ?>
                                        <span class="title color-pd_black mb-10 mb-xs-5 fontwi">
                                            <?php echo get_sub_field('title'); ?> -
                                        </span>
                                        <?php endif; ?>
                                        <?php echo get_sub_field('content'); ?>
                                    </p>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'content_box' ) : ?>
<section class="work-process pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100  overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center blockbuttomtext">
                    <?php echo get_sub_field('contents'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>