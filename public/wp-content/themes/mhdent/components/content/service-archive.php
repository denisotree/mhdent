<?php

$description = term_description();

?>
<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-3">
            <?php

            get_component('components/content/loop.php', [
                'loop_item_type' => 'just-title'
            ])

            ?>
        </div>
        <div class="col-xl-8 col-lg-9">
            <div class="service__article">
                <?php
                get_component('components/blocks/services-price-table.php', [
                    'type' => 'current'
                ]);

                echo $description;

                ?>
            </div>
        </div>
    </div>
</div>
