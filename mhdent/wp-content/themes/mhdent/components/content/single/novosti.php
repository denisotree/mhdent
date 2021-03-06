<?php

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

?>

<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-3">
            <div class="news__preview-image">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
            </div>
        </div>
        <div class="col-xl-8 col-lg-9">
            <div class="service__article">
                <?php

                echo get_the_content();

                ?>
            </div>
        </div>
    </div>
</div>
