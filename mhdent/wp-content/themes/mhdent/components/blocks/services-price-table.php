<?php

/**
 * @var $type | current — текущего типа услуг | all — всех типов услуг
 */

if ($type == 'current') {

    if (have_posts()) {
        ?>
        <div class="services__price-table">
            <table>
                <thead>
                <tr>
                    <th><?php pll_e('Услуга') ?></th>
                    <th><?php pll_e('Цена') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php while (have_posts()) {
                    the_post();
                    $title = get_the_title();
                    $price = CFS()->get('service_price');
                    ?>
                    <tr>
                        <td><?= $title ?></td>
                        <td><?= $price ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <?php

    }
} else {

    $services_types = get_terms([
        'taxonomy' => 'service',
        'hide_empty' => true
    ]);

    ?>

    <div class="services__price-table">
        <table>
            <thead>
            <tr>
                <th><?php pll_e('Услуга') ?></th>
                <th><?php pll_e('Цена') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($services_types as $type) {
                $services_group_query = new WP_Query([
                    'post_type' => 'uslugi',
                    'service' => $type->slug
                ]);
                if ($services_group_query->have_posts()) {
                ?>

                <tr>
                    <th>
                        <span class="services__table-subtitle">
                            <span class="services__table-subtitle-text">
                                <?= $type->name ?>
                            </span>
                        </span>
                    </th>
                </tr>

                <?php
                    while ($services_group_query->have_posts()) {
                        $services_group_query->the_post();
                        $title = get_the_title();
                        $price = CFS()->get('service_price');
                        ?>

                        <tr>
                            <td><?= $title ?></td>
                            <td><?= $price ?></td>
                        </tr>

                        <?php
                    }

                    wp_reset_postdata();

                }

            }

           ?>
            </tbody>
        </table>
    </div>

    <?php

}
