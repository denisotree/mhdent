<?php
get_header();

while (have_posts()) :
    the_post();

    get_component('components/content/single-page.php', []);

    ?>
    <div class="section__container">
        <?= get_the_content() ?>
    </div>
<?php
endwhile;

get_footer();
