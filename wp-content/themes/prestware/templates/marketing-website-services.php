<?php

/**
 * Template Name: Marketing Website Services
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
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <?php if( !empty( get_sub_field('content_group')['heading'] ) ): ?>
                        <h3 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">
                            <?php echo get_sub_field('content_group')['heading'];?>
                        </h3>
                        <?php endif; ?>

                        <?php if( !empty( get_sub_field('content_group')['content'] ) ): ?>
                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <?php echo get_sub_field('content_group')['content'];?>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>




<?php if( get_row_layout() == 'service_section' ) : ?>
<section class="blog-news pb-xs-80 pb-sm-100 pb-md-100 overflow-hidden">
    <div class="container">
        <?php if( !empty( get_sub_field('heading') ) ):?>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="blog-news__content text-center">
                    <h3 class="title color-d_black">
                        <?php echo get_sub_field('heading'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( have_rows('box') ): ?>
        <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
            <div class="row mb-minus-30">
                <?php while( have_rows('box') ) : the_row(); ?>

                <div class="col-xl-4 col-md-6 col-12">
                    <div class="blog-item blog-item-three mb-30">
                        <?php if( !empty( get_sub_field('image')['url'] ) ):?>
                        <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                            <div class="media overflow-hidden">
                                <img src="<?php echo get_sub_field('image')['url']; ?>" class="img-fluid"
                                    alt="<?php echo get_sub_field('image')['alt']; ?>">
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pb-30 pl-30">
                            <h4 class="mb-10"><a href="#"><?php echo get_sub_field('title'); ?></a></h4>
                            <p class="text-justify"><?php echo get_sub_field('details'); ?></p>

                            <?php 
                            $box_link = get_sub_field('link');
                            if( $box_link ): 
                                $box_link_url = $box_link['url'];
                                $box_link_title = $box_link['title'];
                                $box_link_target = $box_link['target'] ? $box_link['target'] : '_self';
                                ?>
                            <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                <a class="theme-btn btn-border" href="<?php echo esc_url( $box_link_url ); ?>"
                                    target="<?php echo esc_attr( $box_link_target ); ?>"><?php echo esc_html( $box_link_title ); ?>
                                    <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>