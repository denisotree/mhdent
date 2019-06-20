<?php
get_header();

while (have_posts()) :
    the_post();

    get_component('components/content/single-' . get_post_type() . '.php', []);


endwhile;

get_footer();
