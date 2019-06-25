<?php
$template_dir = get_template_directory_uri();

$phone = get_option('contact_phone');
$phone_link = preg_replace('~[^0-9+]+~', '', $phone);

if (pll_current_language() == 'ru') {
    $open_hours = get_option('opening_hours_ru');
} elseif (pll_current_language() == 'en') {
    $open_hours = get_option('opening_hours_en');
} else {
    $open_hours = get_option('opening_hours_en');
}

$home_link = pll_home_url();

?>

<div class="topbar__wrapper">
    <div class="topbar__logo d-none d-md-block">
        <a href="<?= $home_link ?>">
            <img src="<?= $template_dir; ?>/images/logo.svg" alt="">
        </a>
    </div>
    <div class="topbar__logo-mob d-md-none">
        <a href="<?= $home_link ?>">
            <img src="<?= $template_dir; ?>/images/anagram.png" alt="">
        </a>
    </div>
    <div class="header__container">
        <div class="topbar__item">
            <div class="phone__link">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:<?= $phone_link; ?>">
                    <?= $phone; ?>
                </a>
            </div>
        </div>
        <div class="topbar__item">
            <div class="topbar__text">
                <?= $open_hours; ?>
            </div>
        </div>
        <div class="topbar__item">
                <a class="btn btn-style-1" id="backCallButton" href="#">
                    <?php pll_e('Заказать обратный звонок')?>
                </a>
        </div>
        <div class="topbar__menu-mob d-md-none" id="mobMenuBars"><i class="fa fa-bars"></i></div>
    </div>

</div>
