<?php

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

?>

<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-3">
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
        <div class="col-xl-8 col-lg-9">
            <div class="service__article">
                <div class="services__price-table table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th><?php pll_e('Услуга') ?></th>
                            <th><?php pll_e('Цена') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title = get_the_title();
                        $price = CFS()->get('service_price');
                        ?>
                        <tr>
                            <td><?= $title ?></td>
                            <td><?= $price ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="service__coll-to-action">
                        <a href="#modalConsultForm" data-page="<?= $title ?>" class="btn btn-style-1 consultButton"><?php pll_e('Получить консультацию') ?></a>
                    </div>
                </div>
                <?php

                echo get_the_content();

                ?>
            </div>
        </div>
    </div>
</div>
