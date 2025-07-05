</main>
<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
$bkg = get_field('footer_bg', 'option');
$bg_sty = '';
if ($bkg) {
    $bg_sty = 'style="background-image: url(' . $bkg . ' )"';
}
if (is_page('sale-he-bung-xoa-deal-cuc-da')) {
    $bkg = get_field('footer_bg_sale_he', 'option');
    if ($bkg) {
        $bg_sty = 'style="background-image: url(' . $bkg . ' ); margin-top: -0px;"';
    }
}
?>
<footer id="footer" class="footer-wrapper" <?= $bg_sty ?>>
    <div class="row st6_add_footer">
        <div class="col medium-6 small-12 large-5">
            <div class="col-inner footer-left">
                <?php
                if (get_field('footer_left', 'option')):
                    while (have_rows('footer_left', 'option')):
                        the_row();
                ?>
                        <a href="<?= get_sub_field('logo_link') ?>" target="_blank">
                            <img style="margin-bottom: 20px;" src="<?= get_sub_field('logo_web') ?>" alt="">
                        </a>
                        <?php

                        while (have_rows('introduce', 'option')):
                            the_row();
                        ?>
                            <p class="introduct">
                                <?= get_sub_field('introduce_attr') ?>
                                <a href="<?= get_sub_field('introduce_link') !== '' ? get_sub_field('introduce_value') : '#' ?>">
                                    <?= get_sub_field('introduce_value') ?>
                                </a>
                            </p>
                <?php
                        endwhile;
                    endwhile;
                endif;
                ?>
                <div class="row">
                    <?php
                    if (get_field('footer_left', 'option')):
                        while (have_rows('footer_left', 'option')):
                            the_row();
                            while (have_rows('company', 'option')):
                                the_row();
                    ?>
                                <div class="col medium-4 small-4 large-4">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y">
                                            <a href="<?= get_sub_field('company_link') !== '' ? get_sub_field('company_link') : '#' ?>"
                                                target="_blank" rel="noopener noreferrer">
                                                <div class="img-inner box-shadow-5-hover dark"
                                                    style="background-color: white; padding: 10px; border-radius: 10px; height: 75px; display: flex; align-items: center;">
                                                    <img loading="lazy" decoding="async" width="184" height="50"
                                                        src="<?= get_sub_field('company_img') ?>"
                                                        class="attachment-large size-large"
                                                        alt="<?= get_sub_field('company_name') ?>">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="col medium-6 small-12 large-4">
            <div class="col-inner footer-center">
                <?php
                if (get_field('footer_center', 'option')):
                    while (have_rows('footer_center', 'option')):
                        the_row();
                ?>
                        <h3><?= get_sub_field('company') !== '' ? get_sub_field('company') : '' ?></h3>
                        <?php
                        while (have_rows('address', 'option')):
                            the_row();
                        ?>

                            <p>
                                <img width="18px" src="<?= get_sub_field('address_icon') ?>" alt="">
                                <span>
                                    <?= get_sub_field('address_sttr') ?>
                                    <a href="<?= get_sub_field('address_link') !== '' ? get_sub_field('address_link') : '#' ?>">
                                        <?= get_sub_field('address_value') ?></a>
                                </span>
                            </p>
                <?php
                        endwhile;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="col medium-6 small-12 large-3">
            <div class="col-inner footer-right">
                <div class="footer-right-top">
                    <?php
                    if (get_field('footer_right', 'option')):
                        while (have_rows('footer_right', 'option')):
                            the_row();
                    ?>
                            <h5><?= get_sub_field('contact_title') ?></h5>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <div class="social-icons follow-icons">
                        <?php
                        if (get_field('footer_right', 'option')):
                            while (have_rows('footer_right', 'option')):
                                the_row();
                                while (have_rows('contact', 'option')):
                                    the_row();
                        ?>
                                    <a href="<?= strtolower(get_sub_field('contact_icon')) ?>" target="_blank"
                                        rel="noopener noreferrer nofollow"
                                        data-label="<?= strtolower(get_sub_field('contact_icon')) ?>"
                                        class="icon primary button square <?= strtolower(get_sub_field('contact_icon')) ?> tooltip tooltipstered box-shadow-5-hover dark"
                                        style="border-radius: 10px; margin-right: 5px;">
                                        <i class="icon-<?= strtolower(get_sub_field('contact_icon')) ?>"></i>
                                    </a>
                        <?php
                                endwhile;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="footer-right-center">
                    <?php
                    if (get_field('footer_right', 'option')):
                        while (have_rows('footer_right', 'option')):
                            the_row();
                    ?>
                            <h5><?= get_sub_field('offcial_account_title') ?></h5>
                            <?php
                            while (have_rows('offcial_account', 'option')):
                                the_row();
                            ?>
                                <span>
                                    <a target="_blank"
                                        href="<?= get_sub_field('offcial_account_link') !== '' ? get_sub_field('offcial_account_link') : '#' ?>">
                                        <img width="80px" src="<?= get_sub_field('offcial_account_img') ?>"
                                            alt="<?= get_sub_field('offcial_account_title') ?>">
                                    </a>
                                </span>
                    <?php
                            endwhile;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="footer-right-bottom">
                    <div class="row align-middle">
                        <?php
                        if (get_field('footer_right', 'option')):
                            while (have_rows('footer_right', 'option')):
                                the_row();
                        ?>
                                <?php
                                while (have_rows('company_register', 'option')):
                                    the_row();
                                ?>
                                    <div class="col medium-4 small-4 large-4">
                                        <div class="col-inner text-center">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y">
                                                <a class=""
                                                    href="<?= get_sub_field('company_register_link') !== '' ? get_sub_field('company_register_link') : '#' ?>"
                                                    target="_blank" rel="noopener noreferrer">
                                                    <div class="img-inner dark">
                                                        <img src="<?= get_sub_field('company_register_img') ?>"
                                                            class="footer-right-bottom-img">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle active" id="top-link"
        aria-label="Go to top">
        <i class="icon-angle-up"></i>
    </a>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>