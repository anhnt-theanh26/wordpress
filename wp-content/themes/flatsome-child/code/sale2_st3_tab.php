<?php

function sale2_st3_tab()
{
?>
    <div class="row" style="margin: 0 !important; padding: 0 !important;">
        <div class="col small-12 large-12" style="margin: 0 !important; padding: 0 !important;">
            <div class="col-inner text-center" style="margin: 0 !important; padding: 0 !important;">
                <div class="tabbed-content sale2_st3_tab">
                    <ul class="nav nav-simple nav-vertical nav-normal nav-size-xsmall nav-center" role="tablist">
                        <?php
                        $i = 0;
                        while (have_rows('tabs', get_queried_object_id())):
                            the_row();
                            $i++;
                        ?>
                            <li id="tab-tab-<?= $i ?>-title" class="tab <?= $i == 1 ? 'active ' : '' ?> has-icon" role="presentation">
                                <a href="#tab_tab-<?= $i ?>-title" role="tab" aria-selected="true" aria-controls="tab_tab-<?= $i ?>-title">
                                    <div class="sale2-st3-tab-item <?= $i == 1 ? 'sale2_tab_active ' : '' ?>">
                                        <img src="<?= get_sub_field('img') ?>" alt="">
                                        <span><?= get_sub_field('name') ?></span>
                                    </div>
                                </a>
                            </li>
                        <?php
                        endwhile;
                        ?>
                    </ul>
                    <div class="tab-panels" style="border: none; margin: 0 !important; padding: 0 !important;">
                        <?php
                        $i = 0;
                        while (have_rows('tabs', get_queried_object_id())):
                            the_row();
                            $i++;
                        ?>
                            <div id="tab_tab-<?= $i ?>-title" class="panel <?= $i == 1 ? 'active ' : '' ?> entry-content" role="tabpanel" aria-labelledby="tab-tab-<?= $i ?>-title">
                                <div class="row">
                                    <?php
                                    while (have_rows('content', get_queried_object_id())):
                                        the_row();
                                    ?>
                                        <div class="col medium-4 small-12 large-4">
                                            <div class="col-inner">
                                                <div class="img has-hover x md-x lg-x y md-y lg-y">
                                                    <div class="img-inner dark">
                                                        <img loading="lazy" decoding="async" width="248" height="417" src="<?= get_sub_field('img') ?>" class="attachment-large size-large" alt="" srcset="<?= get_sub_field('img') ?> 248w, <?= get_sub_field('img') ?> 178w" sizes="auto, (max-width: 248px) 100vw, 248px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                    <div class="col small-12 large-12">
                                        <div class="col-inner">
                                            <a rel="noopener noreferrer" href="<?= get_sub_field('link') ?>" target="_blank" class="button primary st2-btn-click glow-button" style="border-radius:99px;">
                                                <span>ĐĂNG KÝ NGAY</span>
                                                <i class="icon-star" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

add_shortcode('sale2_st3_tab', 'sale2_st3_tab');

function sale2_st3_box_bottom()
{
?>
    <div class="row align-center">
        <div class="col medium-10 small-12 large-10" style="padding: 0;" data-animate="fadeInUp" data-animated="true">
            <div class="col-inner sale2_st3_box_bottom">
                <h1>Lưu ý</h1>
                <?php
                while (have_rows('notes', get_queried_object_id())): the_row();
                ?>
                    <li>
                        <?= get_sub_field('note') ?>
                        <span><?= get_sub_field('note_highlight') ?></span>
                    </li>
                <?php
                endwhile;
                ?>
            </div>
            <img class="sale2_st3_box_bottom_highligh" src="http://landing01.com/wp-content/uploads/2025/07/sale2_st3_img_child_3.png" alt="">
        </div>
    </div>
<?php
}
add_shortcode('sale2_st3_box_bottom', 'sale2_st3_box_bottom');
