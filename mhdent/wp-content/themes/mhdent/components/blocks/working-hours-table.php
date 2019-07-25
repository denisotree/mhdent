<?php

/**
 * @var $type | current — текущего типа услуг | all — всех типов услуг
 */

if ($type == 'current') {

    $monday_common = CFS()->get('monday_common');
    $tuesday_common = CFS()->get('tuesday_common');
    $wednesday_common = CFS()->get('wednesday_common');
    $thursday_common = CFS()->get('thursday_common');
    $friday_common = CFS()->get('friday_common');
    $saturday_common = CFS()->get('saturday_common');
    $sunday_common = CFS()->get('sunday_common');

    $monday_even = CFS()->get('monday_even');
    $tuesday_even = CFS()->get('tuesday_even');
    $wednesday_even = CFS()->get('wednesday_even');
    $thursday_even = CFS()->get('thursday_even');
    $friday_even = CFS()->get('friday_even');
    $saturday_even = CFS()->get('saturday_even');
    $sunday_even = CFS()->get('sunday_even');

    $monday_odd = CFS()->get('monday_odd');
    $tuesday_odd = CFS()->get('tuesday_odd');
    $wednesday_odd = CFS()->get('wednesday_odd');
    $thursday_odd = CFS()->get('thursday_odd');
    $friday_odd = CFS()->get('friday_odd');
    $saturday_odd = CFS()->get('saturday_odd');
    $sunday_odd = CFS()->get('sunday_odd');

    $type = 0;

    if (
        $monday_even != ''
        || $tuesday_even != ''
        || $wednesday_even != ''
        || $thursday_even != ''
        || $friday_even != ''
        || $saturday_even != ''
        || $sunday_even != ''
        || $monday_odd != ''
        || $wednesday_odd != ''
        || $thursday_odd != ''
        || $friday_odd != ''
        || $saturday_odd != ''
        || $sunday_odd != ''

    ) { $type = 1; }

    ?>
    <div class="working-hours__table-mob-right-arrow  d-md-none">
        <?php pll_e('Таблица прокручивается вправо') ?> <i class="fas fa-arrow-right"></i>
    </div>
    <div class="working-hours__table table-responsive">
        <div class="working-hours__table-title">
            <?php pll_e('Часы работы'); ?>
        </div>
        <table class="equal-width-cols">
            <thead>
                <tr>
                    <th></th>
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
             <?php 
             if ($type) { ?>
                <tr>
                    <th>Четные дни</th>
                    <?= $monday_even != '' ? "<td>" . $monday_even . "</td>" : "<td rowspan=2>" . $monday_common . "</td>" ?>
                    <?= $tuesday_even != '' ? "<td>" . $tuesday_even . "</td>" : "<td rowspan=2>" . $tuesday_common . "</td>" ?>
                    <?= $wednesday_even != '' ? "<td>" . $wednesday_even . "</td>" : "<td rowspan=2>" . $wednesday_common . "</td>" ?>
                    <?= $thursday_even != '' ? "<td>" . $thursday_even . "</td>" : "<td rowspan=2>" . $thursday_common . "</td>" ?>
                    <?= $friday_even != '' ? "<td>" . $friday_even . "</td>" : "<td rowspan=2>" . $friday_common . "</td>" ?>
                    <?= $saturday_even != '' ? "<td>" . $saturday_even . "</td>" : "<td rowspan=2>" . $saturday_common . "</td>" ?>
                    <?= $sunday_even != '' ? "<td>" . $sunday_even . "</td>" : "<td rowspan=2>" . $sunday_common . "</td>" ?>
                </tr>
                <tr>
                    <th>Нечетные дни</th>
                    <?= $monday_odd != '' ? "<td>" . $monday_odd . "</td>" : "" ?>
                    <?= $tuesday_odd != '' ? "<td>" . $tuesday_odd . "</td>" : "" ?>
                    <?= $wednesday_odd != '' ? "<td>" . $wednesday_odd . "</td>" : "" ?>
                    <?= $thursday_odd != '' ? "<td>" . $thursday_odd . "</td>" : "" ?>
                    <?= $friday_odd != '' ? "<td>" . $friday_odd . "</td>" : "" ?>
                    <?= $saturday_odd != '' ? "<td>" . $saturday_odd . "</td>" : "" ?>
                    <?= $sunday_odd != '' ? "<td>" . $sunday_odd . "</td>" : "" ?>
                </tr>
            <?php }
            else { ?>
                <tr>
                    <th></th>
                    <?= $monday_common != '' ? "<td>" . $monday_common . "</td>" : "<td></td>" ?>
                    <?= $tuesday_common != '' ? "<td>" . $tuesday_common . "</td>" : "<td></td>" ?>
                    <?= $wednesday_common != '' ? "<td>" . $wednesday_common . "</td>" : "<td></td>" ?>
                    <?= $thursday_common != '' ? "<td>" . $thursday_common . "</td>" : "<td></td>" ?>
                    <?= $friday_common != '' ? "<td>" . $friday_common . "</td>" : "<td></td>" ?>
                    <?= $saturday_common != '' ? "<td>" . $saturday_common . "</td>" : "<td></td>" ?>
                    <?= $sunday_common != '' ? "<td>" . $sunday_common . "</td>" : "<td></td>" ?>
                </tr>
            <?php  }
            ?>
        </tbody>
    </table>
</div>

<?php

} else {

    $doctors_query = new WP_Query([
        'post_type' => 'vrachi',
        'status' => 'published'
    ]);

    if ($doctors_query->have_posts()) {
        ?>
        <div class="working-hours__table-mob-right-arrow  d-md-none">
            <?php pll_e('Таблица прокручивается вправо') ?> <i class="fas fa-arrow-right"></i>
        </div>
        <div class="working-hours__table table-responsive">
            <table class="equal-width-cols">
                <thead>
                    <tr>
                        <th></th>
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
                    <?php

                    while ($doctors_query->have_posts()) {
                        $doctors_query->the_post();

                        $monday_common = CFS()->get('monday_common');
                        $tuesday_common = CFS()->get('tuesday_common');
                        $wednesday_common = CFS()->get('wednesday_common');
                        $thursday_common = CFS()->get('thursday_common');
                        $friday_common = CFS()->get('friday_common');
                        $saturday_common = CFS()->get('saturday_common');
                        $sunday_common = CFS()->get('sunday_common');

                        $monday_even = CFS()->get('monday_even');
                        $tuesday_even = CFS()->get('tuesday_even');
                        $wednesday_even = CFS()->get('wednesday_even');
                        $thursday_even = CFS()->get('thursday_even');
                        $friday_even = CFS()->get('friday_even');
                        $saturday_even = CFS()->get('saturday_even');
                        $sunday_even = CFS()->get('sunday_even');

                        $monday_odd = CFS()->get('monday_odd');
                        $tuesday_odd = CFS()->get('tuesday_odd');
                        $wednesday_odd = CFS()->get('wednesday_odd');
                        $thursday_odd = CFS()->get('thursday_odd');
                        $friday_odd = CFS()->get('friday_odd');
                        $saturday_odd = CFS()->get('saturday_odd');
                        $sunday_odd = CFS()->get('sunday_odd');

                        $type = 0;

                        if (
                            $monday_even != ''
                            || $tuesday_even != ''
                            || $wednesday_even != ''
                            || $thursday_even != ''
                            || $friday_even != ''
                            || $saturday_even != ''
                            || $sunday_even != ''
                            || $monday_odd != ''
                            || $wednesday_odd != ''
                            || $thursday_odd != ''
                            || $friday_odd != ''
                            || $saturday_odd != ''
                            || $sunday_odd != ''

                        ) { $type = 1; }

                        ?>
                        <tr>
                            <th class="doctor-title" colspan="7">
                                <span class="services__table-subtitle">
                                    <span class="services__table-subtitle-text">
                                        <?= get_the_title(); ?>
                                    </span>
                                </span>
                            </th>
                        </tr>
                        <?php 
                        if ($type) { ?>
                            <tr>
                                <th>Четные дни</th>
                                <?= $monday_even != '' ? "<td>" . $monday_even . "</td>" : "<td rowspan=2>" . $monday_common . "</td>" ?>
                                <?= $tuesday_even != '' ? "<td>" . $tuesday_even . "</td>" : "<td rowspan=2>" . $tuesday_common . "</td>" ?>
                                <?= $wednesday_even != '' ? "<td>" . $wednesday_even . "</td>" : "<td rowspan=2>" . $wednesday_common . "</td>" ?>
                                <?= $thursday_even != '' ? "<td>" . $thursday_even . "</td>" : "<td rowspan=2>" . $thursday_common . "</td>" ?>
                                <?= $friday_even != '' ? "<td>" . $friday_even . "</td>" : "<td rowspan=2>" . $friday_common . "</td>" ?>
                                <?= $saturday_even != '' ? "<td>" . $saturday_even . "</td>" : "<td rowspan=2>" . $saturday_common . "</td>" ?>
                                <?= $sunday_even != '' ? "<td>" . $sunday_even . "</td>" : "<td rowspan=2>" . $sunday_common . "</td>" ?>
                            </tr>
                            <tr>
                                <th>Нечетные дни</th>
                                <?= $monday_odd != '' ? "<td>" . $monday_odd . "</td>" : "" ?>
                                <?= $tuesday_odd != '' ? "<td>" . $tuesday_odd . "</td>" : "" ?>
                                <?= $wednesday_odd != '' ? "<td>" . $wednesday_odd . "</td>" : "" ?>
                                <?= $thursday_odd != '' ? "<td>" . $thursday_odd . "</td>" : "" ?>
                                <?= $friday_odd != '' ? "<td>" . $friday_odd . "</td>" : "" ?>
                                <?= $saturday_odd != '' ? "<td>" . $saturday_odd . "</td>" : "" ?>
                                <?= $sunday_odd != '' ? "<td>" . $sunday_odd . "</td>" : "" ?>
                            </tr>
                        <?php }
                        else { ?>
                            <tr>
                                <th></th>
                                <?= $monday_common != '' ? "<td>" . $monday_common . "</td>" : "<td></td>" ?>
                                <?= $tuesday_common != '' ? "<td>" . $tuesday_common . "</td>" : "<td></td>" ?>
                                <?= $wednesday_common != '' ? "<td>" . $wednesday_common . "</td>" : "<td></td>" ?>
                                <?= $thursday_common != '' ? "<td>" . $thursday_common . "</td>" : "<td></td>" ?>
                                <?= $friday_common != '' ? "<td>" . $friday_common . "</td>" : "<td></td>" ?>
                                <?= $saturday_common != '' ? "<td>" . $saturday_common . "</td>" : "<td></td>" ?>
                                <?= $sunday_common != '' ? "<td>" . $sunday_common . "</td>" : "<td></td>" ?>
                            </tr>
                        <?php  }
                        ?>
                        
                    <?php }

                    wp_reset_postdata();

                    ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
