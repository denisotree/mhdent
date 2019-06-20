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

?>

<div class="topbar__wrapper">
    <div class="topbar__logo">
        <img src="<?php echo $template_dir; ?>/images/logo.svg" alt="">
    </div>
    <div class="section__container">
        <div class="topbar__item">
            <div class="phone__link">
                <i class="fas fa-phone-square-alt"></i>
                <a href="tel:<?php echo $phone_link; ?>">
                    <?php echo $phone; ?>
                </a>
            </div>
        </div>
        <div class="topbar__item">
            <div class="topbar__text">
                <?php echo $open_hours; ?>
            </div>
        </div>
        <div class="topbar__item">
                <a class="btn btn-style-1" href="#">
                    Заказать обратный звонок
                </a>
        </div>
    </div>

</div>
