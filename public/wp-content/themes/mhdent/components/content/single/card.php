<?php

$title = get_the_title();
$excerpt = get_the_excerpt();
$thumbnail = get_the_post_thumbnail_url('', 'medium');
$permalink = get_the_permalink();

?>

<div class="card__wrapper">
    <a href="<?= $permalink; ?>">
        <?php if (has_post_thumbnail()) { ?>
            <div class="card__thumbnail">
                <img src="<?= $thumbnail ?>" alt="<?= $title; ?>">
            </div>
        <?php } ?>
        <div class="card__description">
            <div class="card__title">
                <?= $title; ?>
            </div>
            <div class="card__excerpt">
                <?= $excerpt; ?>
            </div>
        </div>
    </a>
</div>
