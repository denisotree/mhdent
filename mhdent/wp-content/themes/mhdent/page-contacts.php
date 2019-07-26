<?php

/**
 * Template name: Contacts
 */

get_header();

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

function get_pure_link($raw_text) {
    return preg_replace('~[^0-9+]+~', '', $raw_text);
}

$phone_1 = CFS() -> get('contacts_phone_1');
$phone_link_1 = get_pure_link($phone_1);

$phone_2 = CFS() -> get('contacts_phone_2');
$phone_link_2 = get_pure_link($phone_2);

$current_path = get_template_directory_uri();

$contact_address = CFS() -> get('contacts_address');

$email = CFS() -> get('contacts_email');
$api_key = get_option('api_key')

?>

    <div class="section__container">
        <div class="contacts__wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-3">
                    <div class="contacts__info">
                        <div class="contacts__info-address">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="contacts__info-icon">
                                        <img src="<?= $current_path ?>/images/map_point.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="contacts__info-content">
                                        <?= $contact_address ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__info-phone">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="contacts__info-icon">
                                        <img src="<?= $current_path ?>/images/phone.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="contacts__info-content">
                                        <a href="tel:<?= $phone_link_1 ?>"><?= $phone_1 ?></a>
                                        <a href="tel:<?= $phone_link_2 ?>"><?= $phone_2 ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__info-email">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="contacts__info-icon">
                                        <img src="<?= $current_path ?>/images/email.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="contacts__info-content">
                                        <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contacts__map-wrapper">
                        <div class="contacts__map-item">
                            <div id="map-body" class="map-wrapper"></div>
                            <script>
                                function initMap() {
                                    var mhdent = {lat: 56.319532, lng: 44.012755};
                                    var map = new google.maps.Map(document.getElementById('map-body'), {
                                        center: mhdent,
                                        zoom: 17
                                    });
                                    var image = 'https://cdn.mapmarker.io/api/v1/font-awesome/v5/pin?icon=fa-tooth&size=50&hoffset=0&voffset=-1';
                                    var marker = new google.maps.Marker({
                                        position: mhdent,
                                        map: map,
                                        icon: image
                                    });
                                }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=<?= $api_key ?>&callback=initMap"
                                    async defer></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <div class="contacts__article">
                        <?= get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();
