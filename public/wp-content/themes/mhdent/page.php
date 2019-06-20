<?php
get_header();

while (have_posts()) :
    the_post();

    get_component('components/content/single-page.php', []);


endwhile;

get_footer();
