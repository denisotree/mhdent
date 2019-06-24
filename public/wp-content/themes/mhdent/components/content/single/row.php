<?php

$title = get_the_title();
$permalink = get_the_permalink();

?>

<div class="card__wrapper">
    <a href="<?= $permalink; ?>">
        <div class="card__box">
            <div class="card__description">
            <div class="card__title">
                <?= $title; ?>
            </div>
        </div>
        </div>
    </a>
</div>
