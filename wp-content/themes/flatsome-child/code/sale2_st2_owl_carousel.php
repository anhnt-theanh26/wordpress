<?php

function sale2_st2_owl_carousel_1()
{
?>
    <div class="owl-carousel owl-theme sale2_st2_owl_carousel_1">
        <?php
        if (get_field('slide_owl_carousel_1', get_queried_object_id())) :
            while (have_rows('slide_owl_carousel_1', get_queried_object_id())) :
                the_row();
        ?>
                <div class="item item_sale2_st2_owl_carousel_1">
                    <div class="item_sale2_owl_top">
                        <img src="<?= get_sub_field('img') ?>" alt="">
                        <div class="item_sale2_owl_top_content">
                            <div class="">
                                <h1>
                                    <?= get_sub_field('name') ?>
                                </h1>
                                <h3><?= get_sub_field('price') ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item_sale2_owl_content">
                        <ul>
                            <?php
                            while (have_rows('content', get_queried_object_id())):
                                the_row();
                            ?>
                                <li>
                                    <div class="item_sale2_owl_content_item">
                                        <img src="<?= get_sub_field('icon') ?>"
                                            style="width: 16px;" alt="">
                                        <?= get_sub_field('attribute') ?>
                                        <span>
                                            <?= get_sub_field('value') ?>
                                            <span>
                                                <?= get_sub_field('value_highlight') ?>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="item_sale2_owl_bottom">
                        <a target="_blank" href="<?= get_sub_field('link') ?? '' ?>">
                            <button class="glow-button" style="background: <?= get_sub_field('color_button') ? get_sub_field('color_button') : 'linear-gradient(to right, #00E0FF, #005CFF)' ?>">
                                ĐĂNG KÝ
                            </button>
                        </a>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
<?php
}

add_shortcode('sale2_st2_owl_carousel_1', 'sale2_st2_owl_carousel_1');

function sale2_st2_owl_carousel_2()
{
?>
    <div class="owl-carousel owl-theme sale2_st2_owl_carousel_1">
        <?php
        if (get_field('slide_owl_carousel_2', get_queried_object_id())) :
            while (have_rows('slide_owl_carousel_2', get_queried_object_id())) :
                the_row();
        ?>
                <div class="item item_sale2_st2_owl_carousel_2">
                    <div class="item_sale2_st2_img">
                        <div class="item_sale2_st2_title">
                            <h1 style="color: <?= get_sub_field('color_sale') ?>;"><?= get_sub_field('title_sale') ?></h1>
                        </div>
                        <img src="<?= get_sub_field('img') ?>" alt="">
                        <div class="item_sale2_owl_content_2">
                            <div class="">
                                <h1>
                                    <?= get_sub_field('name') ?>
                                </h1>
                                <h3><?= get_sub_field('price') ?></h3>
                            </div>
                        </div>
                        <div class="item_sale2_st2_content">
                            <ul>
                                <?php
                                while (have_rows('content', get_queried_object_id())):
                                    the_row();
                                ?>
                                    <li>
                                        <div class="item_sale2_st2_content_item">
                                            <img src="<?= get_sub_field('icon') ?>"
                                                style="width: 16px;" alt="">
                                            <?= get_sub_field('attribute') ?>
                                            <span>
                                                <?= get_sub_field('value') ?>
                                                <span>
                                                    <?= get_sub_field('value_highlight') ?>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                <?php
                                endwhile;
                                ?>
                            </ul>
                            <div class="sale2-st2-btn-owl">
                                <div class="item_sale2_owl_bottom">
                                    <a target="_blank" href="<?= get_sub_field('link') ?? '' ?>">
                                        <button class="glow-button" style="background: <?= get_sub_field('color_button') ?? '' ?>">
                                            ĐĂNG KÝ
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
<?php
}

add_shortcode('sale2_st2_owl_carousel_2', 'sale2_st2_owl_carousel_2');
