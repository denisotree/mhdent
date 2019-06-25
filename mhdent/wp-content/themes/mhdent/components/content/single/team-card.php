<?php

$title = get_the_title();
$spec = CFS()->get('doctor_spec');
$thumbnail = get_the_post_thumbnail_url('', 'medium');
$permalink = get_the_permalink();

?>

<div class="team-card__wrapper">
    <a href="<?= $permalink; ?>">
        <div class="team-card__box">
            <?php if (has_post_thumbnail()) { ?>
                <div class="team-card__thumbnail">
                <img src="<?= $thumbnail ?>" alt="<?= $title; ?>">
            </div>
            <?php } ?>
            <div class="team-card__description">
            <div class="team-card__title">
                <?= $title; ?>
            </div>
            <div class="team-card__excerpt">
                <?= $spec; ?>
            </div>
        </div>
        </div>
    </a>
</div>
