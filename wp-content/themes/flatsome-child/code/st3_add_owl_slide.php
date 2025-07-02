<?php
function st3_add_owl_slide($attr)
{
    $attr = shortcode_atts([
        'data' => '',
    ], $attr);
    $data = $attr['data'];
    ob_start();
    ?>
    <div class="owl-carousel owl-theme <?= esc_attr($data) ?>">
        <?php while (have_rows($data, get_queried_object_id())):
            the_row();
            ?>
            <div class="item st3-owl-slide">
                <div class="slide-top">
                    <h1><?= get_sub_field('title') ?></h1>
                    <h2><?= get_sub_field('price') ?></h2>
                    <hr class="half-line">
                </div>
                <div class="slide-content">
                    <ul>
                        <?php while (have_rows('detail', get_queried_object_id())):
                            the_row(); ?>
                            <li>
                                <p>
                                    <img src="<?= get_sub_field('img') ?>" alt="">
                                    <?= get_sub_field('attribute') ?>
                                    <span class="highlight-content-title">
                                        <?= get_sub_field('value') ?>
                                    </span>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="slide-bottom">
                    <a target="_blank" href="<?= get_sub_field('link') ?? '' ?>">
                        <button class="glow-button">
                            ĐĂNG KÝ NGAY
                        </button>
                    </a>
                </div>
            </div>
            <?php
        endwhile; ?>
    </div>
    <?php $class_suffix = !empty($data) ? '.' . esc_attr($data) : ''; ?>
    <script>
        jQuery(document).ready(function ($) {
            $('.owl-carousel.owl-theme<?= $class_suffix ?>').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                autoHeight: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 2,
                        nav: true,
                    },
                    900: {
                        items: 3,
                        nav: true,
                    },
                    1200: {
                        items: 4,
                        nav: true,
                    }
                }
            })
        });
    </script>

    <?php
    return ob_get_clean();
}
add_shortcode('st3_add_owl_slide', 'st3_add_owl_slide');
