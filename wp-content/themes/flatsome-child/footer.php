<?php

/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;

?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

    <?php
    // get_field('noi_dung', 'option');
    ?>




    <div class="container">
        <div class="row">
            <div class="footer_top"></div>
            <?php while (have_rows('thong_tin', 'option')): the_row(); ?>
                <div class="col medium-12">

                    <div id="text-9" class="wd-widget widget footer-widget  widget_text">
                        <div class="textwidget">
                            <div class="footer-logo" style="margin-bottom: 10px; text-align: center;"><img style="max-width: 80%;" src="<?= get_sub_field('logo') ?>"></div>
                            <p class="widget-title" style="text-align: center;"><?= get_sub_field('thuong_hieu') ?></p>
                            <div class="widget-title_home_footer" style="text-align: center;">
                                <p class=""><?= get_sub_field('dia_chi') ?></p>
                            </div>
                            <div class="" style="text-align: center;">
                                <p class="widget-title_home_footer"><?= get_sub_field('trang_web') ?></p>
                            </div>

                            <div class="footer-social" style="text-align: center;">
                                <?php while (have_rows('mang_xa_hoi', 'option')): the_row(); ?>
                                    <a target="_blank" href="<?= get_sub_field('duong_link') ?>"><img src="<?= get_sub_field('anh') ?>"></a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    <?php endwhile; ?>



</footer><!-- .footer-wrapper -->
</div><!-- #wrapper -->
<?php wp_footer(); ?>
</body>

</html>