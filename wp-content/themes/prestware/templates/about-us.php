<?php

/**
 * Template Name: About Us
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
            <div class="col-xl-6">
                <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                    <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                        <?php if( !empty( get_sub_field('content_group')['heading'] ) ): ?>
                        <h3 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">
                            <?php echo get_sub_field('content_group')['heading'];?>
                        </h3>
                        <?php endif; ?>

                        <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                            <?php echo get_sub_field('content_group')['contents'];?>
                        </div>
                    </div>
                </div>
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


<?php if( get_row_layout() == 'counter_section' ) : ?>
<section class="delivery__wrapper  section-padding bg-center bg-cover overflow-hidden"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg_01.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="section-title text-white">
                    <?php if( !empty( get_sub_field('heading') ) ): ?>
                    <h2 class="text-white">
                        <?php echo get_sub_field('heading');?>
                    </h2>
                    <?php endif; ?>

                    <?php if( !empty( get_sub_field('content') ) ): ?>
                    <p class="text-white mt-15 mb-30">
                        <?php echo get_sub_field('content');?>
                    </p>
                    <?php endif; ?>
                    <?php 
                    $link_button = get_sub_field('link_button');
                    if( $link_button ): 
                        $link_button_url = $link_button['url'];
                        $link_button_title = $link_button['title'];
                        $link_button_target = $link_button['target'] ? $link_button['target'] : '_self';
                        ?>
                    <a href="<?php echo esc_url( $link_button_url ); ?>" class="theme-btn btn__2 bg-white color-primary"
                        target="<?php echo esc_attr( $link_button_target ); ?>">
                        <?php echo esc_html( $link_button_title ); ?>
                        <i class="far fa-chevron-double-right"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <?php if( have_rows('counter') ): ?>
        <div class="row section-padding_3">
            <?php while( have_rows('counter') ) : the_row(); ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 mt-30">
                <div class="counter-area__item counter-area__item-three d-flex align-items-center">
                    <div class="icon color-primary">
                        <img src="<?php echo get_sub_field('icon')['url']; ?>" style="width: 160px;" />
                    </div>
                    <div class="text text-center">
                        <div class="number fw-600 color-primary">
                            <span class="counter">
                                <?php echo get_sub_field('number'); ?>
                            </span>
                            <?php echo get_sub_field('affix'); ?>
                        </div>
                        <div class="description font-la">
                            <?php echo get_sub_field('title'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if( get_row_layout() == 'blog_section' ) : ?>
<?php if( get_sub_field('blogs_show') ) : ?>
<section class="employee-friendly pt-100 pt-xs-80 pt-sm-100 pt-md-100 overflow-hidden">
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