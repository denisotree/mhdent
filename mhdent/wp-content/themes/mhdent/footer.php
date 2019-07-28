</main>

<?php

$footer_email = get_option('contact_email');
$footer_facebook = get_option('facebook');
$footer_vk = get_option('vk');
$footer_instagram = get_option('instagram');

if (pll_current_language() == 'ru') {
    $copyright = get_option('copyright_ru');
    $policy = '/politika/';
    $contact_address = get_option('contact_address_ru');
} elseif (pll_current_language() == 'en') {
    $copyright = get_option('copyright_en');
    $policy = '/policy/';
    $contact_address = get_option('contact_address_en');
} else {
    $copyright = get_option('copyright_en');
    $policy = '/policy/';
    $contact_address = get_option('contact_address_en');
}

?>

<footer>
    <div class="footer__container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__social">
                    <div class="footer__social-links">
                        <?php pll_e('Мы в социальных сетях: '); ?>
                        <a class="footer__social-item" target="_blank" rel="noreferrer noopener" href="<?= $footer_facebook ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="footer__social-item" target="_blank" rel="noreferrer noopener" href="<?= $footer_vk ?>"><i class="fab fa-vk"></i></a>
                        <a class="footer__social-item" target="_blank" rel="noreferrer noopener" href="<?= $footer_instagram ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="footer__contacts">
                        <?= 'E-mail:&nbsp;<a href="mailto:' . $footer_email . '">' . $footer_email . '</a>'?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__anagram">
                    <img src="<?= get_template_directory_uri() ?>/images/anagram.png" alt="">
                </div>
                <div class="footer__copyright">
                    <?= $copyright ?><br>
                    2017 - <?= date('Y') ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__centered">
                    <div class="footer__address">
                        <?= $contact_address ?>
                    </div>
                    <div class="footer__policy">
                        <a href="<?= $policy ?>"><?php pll_e('Политика конфиденциальности') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-area">
        <?php

        get_component('components/modals/modal-consult-form.php', []);
        get_component('components/modals/modal-back-call.php', []);
        get_component('components/modals/modal-appointment-form.php', []);

        ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
