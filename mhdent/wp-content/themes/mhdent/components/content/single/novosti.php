<?php

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

?>

<script src="https://vk.com/js/api/openapi.js?161" type="text/javascript"></script>

<div class="service__archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-xl-8 col-lg-9">
            <div class="service__article">
                <?php

                echo get_the_content();

                ?>
            </div>
        </div>
    </div>
</div>