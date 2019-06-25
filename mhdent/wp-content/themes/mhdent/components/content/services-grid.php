<?php

$lang = pll_current_language();

$services_types = get_terms([
    'taxonomy' => 'service',
    'hide_empty' => true
]);

if($services_types){
    foreach ($services_types as $key => $type) {
        if(pll_get_term_language($type->term_id) !== $lang){
            unset($services_types[$key]);
        }
    }
    $positions_tax = array_values($services_types);
}

?>

<div class="services-grid__container row">
    <?php
    foreach ($services_types as $type) {
        $image_id = get_term_meta($type->term_id, '_thumbnail_id', 1);
        $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
        ?>
        <div class="col-lg-4 col-md-6">
            <a href="<?= get_term_link($type->term_id)?>">
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


