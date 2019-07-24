<?php

$title = get_the_title();

$description = get_the_content();

get_component('components/blocks/main-section-title.php', [
    'title_text' => $title
]);

?>

<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row flex-lg-row flex-sm-column-reverse">
        <div class="col-lg-8">
            <div class="service__article">
                <?php
                get_component('components/blocks/services-price-table.php', [
                    'type' => 'current'
                ]);

                echo $description;

                ?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="service__order">
                <a href="#modalConsultForm" data-page="<?= $title ?>" class="btn btn-style-1 consultButton sidebar-fixed-top"><?php pll_e('Получить консультацию') ?></a>
            </div>
        </div>
    </div>
</div>
