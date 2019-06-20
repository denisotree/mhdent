<?php
get_header();

while (have_posts()) :
    the_post();

    get_component('components/content/front-page.php', []);


endwhile;

get_footer();
