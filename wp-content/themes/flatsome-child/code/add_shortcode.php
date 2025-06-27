<?php

function bk_tai_sao_chon_home()
{
    ob_start();
    ?>
    <article class="bk_tai_sao_chon_home">
        <div class="container">
            <div class="row">
                <div class="col medium-12 noPadding">
                    <div class="owl-carousel slide-review-home">
                        <?php while (have_rows('san_pham', get_queried_object_id())):
                            the_row(); ?>
                            <div class="slide-item">
                                <div class="review-home-item-bk_tai_sao">
                                    <div class="review-home-item-bk_tai_sao_s">
                                        <div class="review-avatar-anh">
                                            <img src="<?= get_sub_field('anh') ?> ">
                                        </div>
                                        <div class="review-author-anh">
                                            <h3> <?= get_sub_field('tieu_de') ?></h3>
                                            <h4> <?= get_sub_field('gia') ?></h4>



                                            <?php while (have_rows('chi_tiet_san_pham', get_queried_object_id())):
                                                the_row(); ?>

                                                <?= get_sub_field('nọi_dung') ?>

                                            <?php endwhile; ?>
                                        </div>

                                        <a>link</a>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </article>



    <?= get_sub_field('noi_dung', 'option'); ?>
    <?php
    return ob_get_clean();
}

add_shortcode('bk_tai_sao_chon_home', 'bk_tai_sao_chon_home');

function footer()
{

}
add_shortcode('footer', 'footer');


//option page acf
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Website Options',
        'menu_title' => 'Website Options',
        'menu_slug' => 'website-options',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}





