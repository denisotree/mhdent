<?php get_header(); ?>

<div class="section__container">

    <?php

    get_component('components/blocks/main-section-title.php', [
        'title_text' => get_the_archive_title()
    ]);

    get_component('components/content/service-archive.php');

    ?>

</div>

<?php
get_footer();
