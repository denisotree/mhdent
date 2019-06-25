<?php

$head_photo = CFS()->get('head_photo');

$welcome_text = CFS()->get('welcome_text');

?>

<div class="head__welcome-container">
    <div class="head__welcome-bg" style="background-image: url('<?= $head_photo; ?>')">
        <div class="head__welcome-sticker">Приветствие</div>
        <div class="head__welcome-content">
            <?= $welcome_text; ?>
        </div>
        <div class="head__welcome-image-mob d-md-none">
            <img src="<?= $head_photo; ?>" alt="">
        </div>
    </div>
</div>
