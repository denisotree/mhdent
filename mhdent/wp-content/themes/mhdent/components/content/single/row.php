<?php

$title = get_the_title();
$excerpt = get_the_excerpt();
$thumbnail = get_the_post_thumbnail_url();
$permalink = get_the_permalink();
$date = get_the_date('d/m/Y')

?>

<div class="card__wrapper">
    <a href="<?= $permalink; ?>">
        <div class="card__row-box">
            <div class="card__row-thumbnail">
                <img src="<?= $thumbnail ?>" alt="<?= $title ?>">
            </div>
            <div class="card__row-description">
                <div class="card__row-date">
                    <?= $date ?>
                </div>
                <div class="card__row-title">
                    <?= $title; ?>
                </div>
                <div class="card__row-excerpt">
                    <?= $excerpt; ?>
                </div>
            </div>
        </div>
    </a>
</div>
