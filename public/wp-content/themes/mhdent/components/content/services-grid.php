<?php

$services_types = get_terms([
    'taxonomy' => 'service_type',
    'hide_empty' => true
]);

?>

<div class="services-grid__container row">
    <?php
    foreach ($services_types as $type) {
        $image_id = get_term_meta($type->term_id, '_thumbnail_id', 1);
        $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
        ?>
        <div class="col-lg-4 col-md-6">
            <a href="/<?= $type->slug?>/">
                <div class="services-grid__item">
                    <div class="services-grid__item-thumbnail">
                        <img src="<?= $image_url ?>" alt="<?= $type->name ?>">
                    </div>
                    <div class="services-grid__item-title">
                        <?= $type->name ?>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
