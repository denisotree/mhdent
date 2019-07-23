<?php

/**
 * @var $type | current — текущего типа услуг | all — всех типов услуг
 */

if ($type == 'current') {

    $services = CFS() -> get('service_positions');

    if (!is_null($services)) {
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
                    <?php foreach ($services as $service) {
                        $title = $service['position_title'];
                        $price = $service['position_price'];
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

    $services_types = new WP_Query([ 'post_type' => 'uslugi' ]);
    if ($services_types -> have_posts()) {
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
                    while ($services_types -> have_posts()) {
                        $services_types -> the_post();
                        $services_type_name = get_the_title();
                        $services = CFS() -> get('service_positions');
                        if (!is_null($services)) {
                            ?>
                            <tr>
                                <th>
                                    <span class="services__table-subtitle">
                                        <span class="services__table-subtitle-text">
                                            <?= $services_type_name ?>
                                        </span>
                                    </span>
                                </th>
                            </tr>

                            <?php
                            foreach ($services as $service) {
                               $title = $service['position_title'];
                               $price = $service['position_price'];
                               ?>

                               <tr>
                                <td><?= $title ?></td>
                                <td><?= $price ?></td>
                            </tr>

                            <?php
                        }
                    }
                }
                wp_reset_postdata();

                ?>
            </tbody>
        </table>
    </div>

    <?php
}
}
