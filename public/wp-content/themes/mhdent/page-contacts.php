<?php

/**
 * Template name: Contacts
 */

get_header();

get_component('components/blocks/main-section-title.php', [
    'title_text' => get_the_title()
]);

get_footer();
