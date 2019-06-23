<?php

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

?>

<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-lg-4">
            <?php
            $current_service_type = wp_get_post_terms(get_the_ID(), 'service', [
                'fields' => 'names'
            ]);

            get_component('components/content/loop.php', [
                'loop_type' => 'query',
                'loop_args' => [
                    'post_type' => 'uslugi',
                    'service' => $current_service_type[0]
                ],
                'loop_item_type' => 'just-title'
            ])

            ?>
        </div>
        <div class="col-lg-8">
            <div class="service__article">
                <?php

                echo get_the_content();

                ?>
            </div>
        </div>
    </div>
</div>
