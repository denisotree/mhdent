<?php

$doctor_photo = get_the_post_thumbnail_url('', 'medium');
$doctor_name = get_the_title();
$doctor_spec = CFS()->get('doctor_spec');
$doctor_description = get_the_content();

?>

<div class="archive-wrapper">
    <?php get_component('components/blocks/history-back.php', []); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-3">
            <div class="doctor__photo"><img src="<?= $doctor_photo ?>" alt="<?= $doctor_name ?>"></div>
        </div>
        <div class="col-xl-8 col-lg-9">
            <div class="doctor__info">
                <div class="doctor__name">
                    <h1><?= $doctor_name ?></h1>
                </div>
                <div class="doctor__specialisation">
                    <?= $doctor_spec ?>
                </div>
                <div class="doctor__appointment">
                    <a href="#modalAppointmentForm" data-page="<?= $doctor_name ?>" class="btn btn-style-1 appointmentButton"><?php pll_e('Записаться на прием')?></a>
                </div>
                <div class="doctor__description">
                    <?= $doctor_description ?>
                </div>
                <div class="doctor__working-hours">
                    <?php get_component('components/blocks/working-hours-table.php', [
                        'type' => 'current'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
