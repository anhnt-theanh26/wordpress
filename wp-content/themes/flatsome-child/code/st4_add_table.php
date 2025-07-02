<?php

function st4_add_table()
{
    ?>
    <div class="st4-table">
        <table>
            <tbody>
                <tr>
                    <th style="font-size: 25px; color: #FF8B00;" colspan="2"><?= get_field('title_1') ?? '' ?></th>
                </tr>
                <?php
                while (have_rows('table_1', get_queried_object_id())):
                    the_row();
                    ?>
                    <tr>
                        <th style="border-right: 1px solid white;"><?= get_sub_field('attribute') ?></th>
                        <th>
                            <?= get_sub_field('value') ?>
                            <span style="color: #00ccff;"><?= get_sub_field('value_highlight') ?></span>
                        </th>
                    </tr>
                    <?php
                endwhile;
                ?>
            </tbody>
            <img class="st4-img-table" src="<?= get_field('img_sale') ?>" alt="">
        </table>
    </div>
    <a target="_blank" href="<?= get_field('link') ?>">
        <button class="glow-button"
            style="border: 1px solid white; color: white; border-radius: 50px; background: linear-gradient(to right, #00E0FF, #005CFF);">
            ĐĂNG KÝ NGAY
        </button>
    </a>
    <div class="st4-box">
        <p>
            <?= get_field('title_1') ?? '' ?>
        </p>
        <?php while (have_rows('table_2', get_queried_object_id())):
            the_row(); ?>
            <p>
                <span style="padding-right: 20px;">+</span>
                <span>Thuê <span style="font-weight: 700; color: #00ccff;"><?= get_sub_field('rent') ?></span></span>
                <span>:</span>
                <span>Tặng thêm <span style="font-weight: 700; color: #00ccff;"><?= get_sub_field('gift') ?></span></span>
            </p>
        <?php endwhile; ?>
    </div>
    <?php
}
add_shortcode('st4_add_table', 'st4_add_table');
