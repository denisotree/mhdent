<?php

$title = get_the_title();
$permalink = get_the_permalink();
$current_link = 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<div class="card__wrapper">
    <a href="<?= $permalink; ?>">
        <div class="card__box<?php if ($permalink == $current_link) echo ' current_item'?>">
            <div class="card__description">
            <div class="card__title">
                <?= $title; ?>
            </div>
        </div>
        </div>
    </a>
</div>
