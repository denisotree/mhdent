<?php

/**
 * @var $type | current — текущего типа услуг | all — всех типов услуг
 */

if ($type == 'current') {

    $monday = CFS()->get('monday');
    $tuesday = CFS()->get('tuesday');
    $wednesday = CFS()->get('wednesday');
    $thursday = CFS()->get('thursday');
    $friday = CFS()->get('friday');
    $saturday = CFS()->get('saturday');
    $sunday = CFS()->get('sunday');
    ?>
    <div class="working-hours__table">
        <table class="equal-width-cols">
            <thead>
            <tr>
                <th><?php pll_e('Пн') ?></th>
                <th><?php pll_e('Вт') ?></th>
                <th><?php pll_e('Ср') ?></th>
                <th><?php pll_e('Чт') ?></th>
                <th><?php pll_e('Пт') ?></th>
                <th><?php pll_e('Сб') ?></th>
                <th><?php pll_e('Вс') ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th colspan="7">
                    <span class="services__table-subtitle">
                        <span class="services__table-subtitle-text">
                            <?= get_the_title(); ?>
                        </span>
                    </span>
                </th>
            </tr>
            <tr>
                <td><?php echo $monday != '' ? $monday : pll__('Выходной') ?></td>
                <td><?php echo $tuesday != '' ? $tuesday : pll__('Выходной') ?></td>
                <td><?php echo $wednesday != '' ? $wednesday : pll__('Выходной') ?></td>
                <td><?php echo $thursday != '' ? $thursday : pll__('Выходной') ?></td>
                <td><?php echo $friday != '' ? $friday : pll__('Выходной') ?></td>
                <td><?php echo $saturday != '' ? $saturday : pll__('Выходной') ?></td>
                <td><?php echo $sunday != '' ? $sunday : pll__('Выходной') ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <?php

} else {

//    $services_types = get_terms([
//        'taxonomy' => 'service',
//        'hide_empty' => true
//    ]);

    ?>

    <!--    <div class="services__price-table">-->
    <!--        <table>-->
    <!--            <thead>-->
    <!--            <tr>-->
    <!--                <th>--><?php //pll_e('Услуга') ?><!--</th>-->
    <!--                <th>--><?php //pll_e('Цена') ?><!--</th>-->
    <!--            </tr>-->
    <!--            </thead>-->
    <!--            <tbody>-->
    <?php

//            foreach ($services_types as $type) {
//                $services_group_query = new WP_Query([
//                    'post_type' => 'uslugi',
//                    'service' => $type->slug
//                ]);
//                if ($services_group_query->have_posts()) {
//                    ?>

    <!--                    <tr>-->
    <!--                        <th>-->
    <!--                        <span class="services__table-subtitle">-->
    <!--                            <span class="services__table-subtitle-text">-->
    <!--                                --><?//= $type->name ?>
    <!--                            </span>-->
    <!--                        </span>-->
    <!--                        </th>-->
    <!--                    </tr>-->

    <!--                    --><?php
//                    while ($services_group_query->have_posts()) {
//                        $services_group_query->the_post();
//                        $title = get_the_title();
//                        $price = CFS()->get('service_price');
//                        ?>
    <!---->
    <!--                        <tr>-->
    <!--                            <td>--><?//= $title ?><!--</td>-->
    <!--                            <td>--><?//= $price ?><!--</td>-->
    <!--                        </tr>-->
    <!---->
    <!--                        --><?php
//                    }
//                }
//
//            }
//
////            ?>
    <!--            </tbody>-->
    <!--        </table>-->
    <!--    </div>-->

    <?php

}
