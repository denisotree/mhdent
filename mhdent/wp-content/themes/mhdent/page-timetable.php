<?php

/**
 * Template name: Timetable
 */

get_header();

?>

    <div class="section__container">

        <?php

        get_component('components/blocks/main-section-title.php', [
            'title_text' => get_the_title()
        ]);



        ?>

        <div class="service__archive-wrapper">
            <div class="row">
                <div class="col-xl-9 col-lg-10">
                    <div class="service__article">
                        <?php get_component('components/blocks/working-hours-table.php', [
                            'type' => 'all'
                        ]) ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2">
                    <div class="timetable__description">
                        <?= get_the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();
