<?php

/**
 * Template name: Prices
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
                <div class="col-lg-8">
                    <div class="service__article">
                        <?php
                        get_component('components/blocks/services-price-table.php', [
                            'type' => 'all'
                        ]);

                        ?>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </div>

<?php

get_footer();
