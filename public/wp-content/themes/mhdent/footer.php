</main>

<?php

$footer_email = get_option('contact_email');
$footer_facebook = get_option('facebook');
$footer_vk = get_option('vk');

if (pll_current_language() == 'ru') {
    $copyright = get_option('copyright_ru');
} elseif (pll_current_language() == 'en') {
    $copyright = get_option('copyright_en');
} else {
    $copyright = get_option('copyright_en');
}

?>

<footer>
    <div class="footer__container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__social">
                    <?php pll_e('Мы в социальных сетях'); ?>
                    <div class="footer__social-links">
                        <a class="footer__social-item" href="<?= $footer_facebook ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="footer__social-item" href="<?= $footer_vk ?>"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__anagram">
                    <img src="<?= get_template_directory_uri() ?>/images/anagram.png" alt="">
                </div>
                <div class="footer__copyright">
                    <?= $copyright ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__contacts">
                    <?= 'E-mail:&nbsp;<a href="mailto:' . $footer_email . '">' . $footer_email . '</a>'?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
