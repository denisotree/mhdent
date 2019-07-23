<?php

$lang = pll_current_language();

$services_args = [
    'post_type' => 'uslugi',
    'status' => 'published'
];

$services_query = new WP_Query($services_args);
if ($services_query -> have_posts()) {

    ?>

    <div class="services-grid__container row">
        <?php
        while ($services_query -> have_posts()) {
            $services_query -> the_post();
            $image_url = get_the_post_thumbnail_url('', 'large' );
            ?>
            <div class="col-lg-4 col-md-6">
                <a href="<?= get_the_permalink() ?>">
                    <div class="services-grid__item">
                        <div class="services-grid__item-thumbnail">
                            <img src="<?= $image_url ?>" alt="<?= get_the_title() ?>">
                        </div>
                        <div class="services-grid__item-title">
                            <?= get_the_title() ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

<?php } ?>


