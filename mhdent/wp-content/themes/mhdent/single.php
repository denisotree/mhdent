<?php
get_header();

while (have_posts()) :
    the_post();

?>

    <div class="section__container">

    <?php get_component('components/content/single/' . get_post_type() . '.php', []) ?>

    </div>

<?php

endwhile;

get_footer();
