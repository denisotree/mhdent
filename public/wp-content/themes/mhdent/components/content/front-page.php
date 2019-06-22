<?php
get_component('components/blocks/page-slider.php', []);
?>
<div class="section__container">

    <div class="row">
        <div class="col-lg-9">
            <?php get_component('components/blocks/head-welcome.php', []) ?>
        </div>
        <div class="col-lg-3">
            <?php get_component('components/blocks/centered-section-title.php', [
                'title_text' => 'Новости',
                'title_link' => '/news/'
            ]) ?>
            <?php get_component('components/content/loop.php', [
                'loop_type' => 'query',
                'loop_args' => [
                    'post_type' => 'novosti',
                    'posts_per_page' => 2,
                    'status' => 'published'
                ]
            ]) ?>
        </div>
    </div>
</div>
<div class="section__container">
    <?php get_component('components/blocks/centered-section-title.php', [
        'title_text' => 'Услуги',
        'title_link' => '/uslugi/'
    ]) ?>
    <?php get_component('components/content/services-grid.php', [])?>
</div>
