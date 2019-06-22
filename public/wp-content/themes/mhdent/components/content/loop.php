<?php

/**
 *
 * @var $loop_type / query — цикл с запросом / simple — основанный на global query
 *
 * @var $loop_args / аргументы для query цикла
 *
 * @var $loop_cols / количество колонок
 *
 * @var $loop_item_type / card — карточка с фото и текстом / row — запись в одну строку с маленькой фотографией
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

$loop_item_before = '<div class="col-lg-' . round(12 / $loop_cols) . ' loop__item" >';

$loop_item_after = '</div>';

if ($loop_type == 'simple') {
    if (have_posts()) {
        echo $loop_before;
        while (have_posts()) {
            the_post();
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
