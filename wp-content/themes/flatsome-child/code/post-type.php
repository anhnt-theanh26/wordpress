<?php


/**
 * @return false|stringhien thị san phẩm nổi bật
 */
define('URL_TG', get_stylesheet_directory_uri());
define('DOMAIN', 'flatsome');
function create_bk_ux_builder_post_category_bk()
{
    add_ux_builder_shortcode('bk_ux_builder_post_category_bk', array(
        'name' => __('Hiển thị bài viết theo chuyên mục ', DOMAIN),
        'category' => __('BKWEB', DOMAIN),
        'priority' => 1,
        'thumbnail' => URL_TG . '/assets/images/blog_posts-1.svg',
        'options' => array(
            'title' => array('type' => 'textfield', 'heading' => __('Tiêu đề', DOMAIN), 'default' => ''),
            'number_items' => array('type' => 'textfield', 'heading' => __('Số lượng', DOMAIN), 'default' => ''),
            'bg_color' => array(
                'type' => 'colorpicker',
                'heading' => __('Color'),
                'format' => 'rgb',
                'position' => 'bottom right',
            ),
            'type' => array(
                'heading' => __('type', DOMAIN),
                'type' =>'select',
                'default' => 'normal',
                'options' => array(
                    'row'      => 'Row',
                    'slider'      => 'slider',

                ),
            ),
            'category' => array(
                'heading' => __('Danh mục', DOMAIN),
                'type' => 'select',
                'full_width' => true,
                'config' => array(
                    'placeholder' => __('Chọn chuyên mục', DOMAIN),
                    'termSelect' => array(
                        'taxonomies' => 'category',
                        'field' => 'term_id'
                    )
                )
            ),

        )
    ));
}

add_action('ux_builder_setup', 'create_bk_ux_builder_post_category_bk');


function add_bk_ux_builder_post_categorys($args)
{


    extract(shortcode_atts(array(
        'title' => '', 'number_items' => '', 'category' => '', 'type' => '' ,'bg_color' => ''
    ), $args));
    if (!empty($title) && !empty($category)) {
        $number_items = isset($number_items) ? $number_items : 1;
        $type = isset($type) ? $type : 'row';
        $bg_color = isset($bg_color) ? $bg_color : '#0b0b0b';
        return add_ux_post_category_slides($title, $number_items, $category, $type,$bg_color);
    }
}
add_shortcode('bk_ux_builder_post_category_bk', 'add_bk_ux_builder_post_categorys');

function add_ux_post_category_slides($title, $number_items, $category,$type,$bg_color)
{
    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $number_items,
        'post_status' => 'publish',
        'orderBy' => 'ID',
        'order' => 'DESC',
        'tax_query' => array(
            [
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $category
            ]
        )
    ));
    ob_start();
    $category_link = get_category_link( $category );
    ?>

    <?php   if ($type == 'row'): ?>
    <article class="bk-post">
        <div class="container">
            <div class="row">

                <div class="col-inner">

                    <div class="home-title">
                        <h3 class="section-title section-title-normal" style="border-bottom: 3px solid <?= $bg_color ?>; width: 90%"><b></b><span class="section-title-main" style="color:<?= $bg_color ?>;"><?= $title ?></span><b></b></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php $i = 1;
                    while ($query->have_posts()): $query->the_post();
                        if ($i == 1): ?>
                            <div class="col medium-6">
                                <div class="article-item">

                                    <?php if (has_post_thumbnail(get_the_ID())): ?>
                                        <?= get_the_post_thumbnail(get_the_ID(), 'medium_large') ?>
                                    <?php else: ?>
                                        <img src="<?= URL_TG . '/assets/images/default.png' ?>" alt="">
                                    <?php endif; ?>
                                    <h4 class="article-title" >
                                        <a class="tetx_categoryss"  href="<?= get_the_permalink() ?>">
                                            <?= the_title() ?>
                                        </a>

                                    </h4>
                                    <span> <?php the_time('d/m/Y'); ?></span>
                                    <p class="article-desc">
                                        <?= wp_trim_words(get_the_content(), 40, ' ...') ?>
                                    </p>
                                    <!--<p class="article-datetime"><span class="glyphicon glyphicon-time"></span> 17/06/2017 </p>-->
                                </div><!-- /item -->
                            </div>

                        <?php endif;
                        $i++;endwhile; ?>
                    <div class="col medium-6">
                        <?php $i = 1;
                        while ($query->have_posts()): $query->the_post();
                            if ($i > 1): ?>
                                <div class="row article-items_homed">
                                    <div class="col medium-4">
                                    <?php if (has_post_thumbnail(get_the_ID())): ?>
                                        <?= get_the_post_thumbnail(get_the_ID(), 'medium_large') ?>
                                    <?php else: ?>
                                        <img src="<?= URL_TG . '/assets/images/default.png' ?>" alt="">
                                    <?php endif; ?>
                                    </div>
                                    <div class="col medium-8">
                                        <h4 class="article-title" >
                                            <a class="tetx_categorys" href="<?= get_the_permalink() ?>">
                                                <?= the_title() ?>

                                            </a>
                                           <span> <?php the_time('d/m/Y'); ?></span>
                                        </h4>
                                    </div>


                                    <!--<p class="article-datetime"><span class="glyphicon glyphicon-time"></span> 17/06/2017 </p>-->
                                </div><!-- /item -->

                            <?php endif;
                            $i++;endwhile; ?>
                    </div>


                <a rel="noopener noreferrer" href="  <?php
                echo $category_link
                ?>" target="_blank" class="button primary lowercase nut-xem-them-1" style="border-radius:99px; background:<?= $bg_color ?>; ">
                    <span>Xem tất cả</span>
                    <i class="icon-angle-right"></i></a>
            </div>
        </div>
    </article>


    <?php endif; ?>
    <?php   if ($type == 'slider'): ?>


    <article class="box-cd">
        <div class="container">
            <div class="row">

                    <div class="col-inner">

                        <div class="home-title">
                            <h3 class="section-title section-title-normal" style="border-bottom: 3px solid <?= $bg_color ?>; width: 100%"><b></b><span class="section-title-main" style="color:<?= $bg_color ?>;"><?= $title ?></span><b></b></h3>
                        </div>
                    </div>
                <div class="col medium-12 noPadding_homes_slider">
                    <div class="owl-carousel slide-post">

                        <?php
                        while ($query->have_posts()): $query->the_post();
                            ?>
                                <div class="slide-item">
                                    <div class="owl-carousel.slider-partner'">
                                        <div class="col post-itemsh">
                                            <div class="col-inner_homes">
                                                <a href="<?= get_the_permalink() ?>" class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-cover" style="padding-top:100%;">
                                                                <?php the_post_thumbnail(); ?>
                                                            </div>
                                                        </div>
                                                        <div class="box-text text-left_homers_tes">
                                                            <div class="box-text-inner blog-post-inner">


                                                                <h5 class="post-title is-large "> <?= the_title() ?></h5>
                                                                <div class="post-meta is-small op-8"></div><div class="thong-tin-meta" style="color:<?= $bg_color ?>;">
                                                                    <span class="date"> <?php the_time('d/m/Y'); ?></span>
                                                                    <span class="byline"><span class="meta-author"></span></span>
                                                                </div>										<p class="from_the_blog_excerpts "><?= wp_trim_words(get_the_content(), 30, ' ...') ?></p>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div><!-- .box  -->
                                </div>
                        <?php endwhile; ?>


                    </div>
                </div>
                <div class="col medium-12 noPadding_homes_slider " style="text-align: center;">
                    <a rel="noopener noreferrer" href="  <?php
                    echo $category_link
                    ?>" target="_blank" class="button primary lowercase nut-xem-them-1" style="border-radius:99px; background:<?= $bg_color ?>; ">
                        <span>Xem tất cả bài viết</span>
                        <i class="icon-angle-right"></i></a>
                </div>

            </div>
        </div>
    </article>

    <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>

    <?php endif; ?>


    <?php
    wp_reset_postdata();
    return ob_get_clean();
}










