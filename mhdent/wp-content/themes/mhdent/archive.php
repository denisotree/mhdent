<?php get_header(); ?>

    <div class="section__container">

        <?php

        $block_type = 'card';
        $blocks_per_line = 1;

        $post_slug = get_post_type();

        if ($post_slug == 'vrachi') {
            $block_type = 'team-card';
            $blocks_per_line = 4;
            $archive_title = pll__('Врачи');
        } elseif ($post_slug == 'novosti') {
            $block_type = 'row';
            $archive_title = pll__('Новости');
        }

        get_component('components/blocks/main-section-title.php', [
            'title_text' => $archive_title
        ]);
        ?>
        <div class="archive-wrapper">
            <?php
            get_component('components/content/loop.php', [
                'loop_cols' => $blocks_per_line,
                'loop_item_type' => $block_type
            ])
            ?>
        </div>


    </div>

<?php
get_footer();
