<?php
function bg_img()
{
    $section_3_image = get_field('section_3_image', 'option');
    if ($section_3_image) {
        ?>
        <style>
            .st3-bg-img {
                background-image: url(<?= $section_3_image ?>) !important;
            }
        </style>
        <?php
    }
    $section_4_image = get_field('section_4_image', 'option');
    if ($section_4_image) {
        ?>
        <style>
            .st4-bg-img {
                background-image: url(<?= $section_4_image ?>) !important;
            }
        </style>
        <?php
    }
    $section_5_image = get_field('section_5_image', 'option');
    if ($section_5_image) {
        ?>
        <style>
            .st5-bg-img {
                background-image: url(<?= $section_5_image ?>) !important;
            }
        </style>
        <?php
    }
    $section_6_image = get_field('section_6_image', 'option');
    if ($section_6_image) {
        ?>
        <style>
            .st6-bg-img {
                background-image: url(<?= $section_6_image ?>) !important;
            }
        </style>
        <?php
    }
}

// add_action('wp_head', 'bg_img');