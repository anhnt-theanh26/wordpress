<?php
function st5_add_tab()
{
    ?>
    <div class="tabbed-content st5-tabs">
        <ul class="nav nav-divided nav-uppercase nav-size-normal nav-center" role="tablist">
            <?php
            $i = 0;
            while (have_rows('tab', get_queried_object_id())):
                the_row();
                $i++;
                ?>
                <li id="tab-tab-<?= $i ?>-title" class="tab has-icon <?= $i == 1 ? 'active' : '' ?>" role="presentation">
                    <a href="#tab_tab-<?= $i ?>-title" role="tab" aria-selected="true" aria-controls="tab_tab-<?= $i ?>-title">
                        <div class="st5-tab-item <?= $i == 1 ? 'st5-tab-color-active' : '' ?>">
                            <img src="<?= get_sub_field('img') ?>" alt="<?= get_sub_field('name') ?>">
                            <span><?= get_sub_field('name') ?></span>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="tab-panels">
            <?php
            $i = 0;
            while (have_rows('tab', get_queried_object_id())):
                the_row();
                $i++;
                ?>
                <div id="tab_tab-<?= $i ?>-title" class="panel entry-content <?= $i == 1 ? 'active' : '' ?>" role="tabpanel"
                    aria-labelledby="tab-tab-<?= $i ?>-title">
                    <div class="row align-center">
                        <div class="col medium-6 small-12 large-4 tab-content">
                            <div class="">
                                <?php while (have_rows('extend', get_queried_object_id())):
                                    the_row(); ?>
                                    <div class="col-inner tab-content-left">
                                        <img src="<?= get_sub_field('extend_img') ?>" alt="">
                                        <p>
                                            <?= get_sub_field('value') ?>
                                            <span><?= get_sub_field('value_highlight') ?></span>
                                        </p>
                                    </div>
                                <?php endwhile; ?>
                                <p class="tab-content-left-title">
                                    <?= get_sub_field('notification') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col medium-6 small-12 large-4 tab-content">
                            <div class="col-inner tab-content-right">
                                <h4>Lưu ý: <?= $i ?></h4>
                                <?php
                                while (have_rows('note', get_queried_object_id())):
                                    the_row();
                                    ?>
                                    <p>
                                        <?= get_sub_field('note_item') ?>
                                    </p>
                                    <?php
                                endwhile;
                                ?>
                                <div class="btn-click-tab">
                                    <a target="_blank" href="<?= get_sub_field('link') ?>">
                                        <button class="glow-button"
                                            style="border: 1px solid white; color: white; border-radius: 50px; background: linear-gradient(to right, #00E0FF, #005CFF);">
                                            ĐĂNG KÝ NGAY
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php
}
add_shortcode('st5_add_tab', 'st5_add_tab');