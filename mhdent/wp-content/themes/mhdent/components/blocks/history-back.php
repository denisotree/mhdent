<?php

if (is_singular('services')) {
    $current_service_type = wp_get_post_terms(get_the_ID(), 'service', [
        'fields' => 'ids'
    ]);
    $back_link = get_term_link($current_service_type[0], 'service');
} elseif (is_single()) {
    $back_link = '/' . get_post_type() . '/';
} else {
    $back_link = 'javascript:history.go(-1)';
}

?>

<div class="history-back__block">
    <i class="fas fa-arrow-left"></i>
    <a href="<?= $back_link ?>"><?php pll_e('Назад') ?></a>
</div>
