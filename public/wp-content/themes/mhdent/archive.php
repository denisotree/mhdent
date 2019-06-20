<?php get_header(); ?>

<div class="archive__wrapper">

    <?php if (have_posts()) { ?>

        <div class="archive__title">
            <h1><?php the_archive_title(); ?></h1>
        </div>

        <div class="archive__content row">
            <?php while (have_posts()) {
                the_post();

                get_component('components/content/archive-' . get_post_type(), []);

            }
            ?>
        </div>
    <?php
    } else {

        get_component('components/content/empty.php', []);

    }
    ?>
</div>

<?php
get_footer();
