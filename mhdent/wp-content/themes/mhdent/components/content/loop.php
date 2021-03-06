<?php

/**
 *
 * @var $loop_type / query — цикл с запросом / simple — основанный на global query
 *
 * @var $loop_args / аргументы для query цикла
 *
 * @var $loop_cols / количество колонок
 *
 * @var $loop_item_type |
 *  card — карточка с фото и текстом
 *  row — запись в одну строку с маленькой фотографией
 *  just-title — только заголовок, можно использовать для меню
 *  team-card — карточка с картинкой вертикальной ориентации и одинаковым по высоте описанием
 *
 */

if (!isset($loop_type)) {
    $loop_type = 'simple';
}

if (!isset($loop_cols)) {
    $loop_cols = 1;
}

if (!isset($loop_item_type)) {
    $loop_item_type = 'card';
}

$loop_before = '<div class="loop__wrapper"><div class="row">';

$loop_after = '</div></div>';

if ($loop_item_type == 'row') {
    $loop_item_before = '<div class="col-lg-12 loop__item" >';
} else {
    if ($loop_cols != 1) {
        $loop_item_before = '<div class="col-lg-' . round(12 / $loop_cols) . ' col-md-' . round(12 / $loop_cols * 2) . ' loop__item" >';
    } else {
        $loop_item_before = '<div class="col-lg-12 col-md-6 loop__item" >';
    }
}

$loop_item_after = '</div>';

if ($loop_type == 'simple') {
    global $wp_query;
    if ($wp_query->have_posts()) {
        echo $loop_before;
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            echo $loop_item_before;
            get_component('components/content/single/' . $loop_item_type . '.php', []);
            echo $loop_item_after;
        }
        echo $loop_after;
    }
} elseif ($loop_type == "query") {

    $query = new WP_Query($loop_args);

    if ($query -> have_posts()) {
        echo $loop_before;
        while ($query -> have_posts()) {
            $query -> the_post();
            echo $loop_item_before;
            get_component('components/content/single/' . $loop_item_type . '.php', []);
            echo $loop_item_after;
        }
        wp_reset_postdata();
        echo $loop_after;
    }
}
