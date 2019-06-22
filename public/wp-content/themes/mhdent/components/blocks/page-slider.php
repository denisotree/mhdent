<?php

/**
 * Блок выводит слайдер, если он задан на данной странице
 */

$slider_items = CFS()->get('main_slider_loop');

?>

<div class="main__slider-container">
    <div class="main__slider-items">
        <?php
        foreach ($slider_items as $slider_item) {

            $slider_image = $slider_item['main_slider_image'];
            $slider_title = $slider_item['main_slider_title'];
            $slider_subtitle = $slider_item['main_slider_subtitle'];
            $slider_link_text = $slider_item['main_slider_link_text'];
            $slider_link_url = $slider_item['main_slider_link'];
            $slider_link_target = $slider_item['main_slider_target'];
            if ($slider_link_target != 1) {
                $target_blank = '';
            } else {
                $target_blank = 'target="_blank"';
            }

            if ($slider_image != '') { ?>
                <div class="main__slider-item">
                    <div class="main__slider-item-image"
                         style="background-image: url('<?= $slider_image; ?>')"></div>
                    <div class="main__slider-item-content-container">
                        <div class="main__slider-item-content">
                            <?php if ($slider_title !== '') { ?>
                                <div class="main__slider-item-content-title"><?= $slider_title; ?></div><?php } ?>
                            <?php if ($slider_subtitle !== '') { ?>
                                <div class="main__slider-item-content-subtitle"><?= $slider_subtitle; ?></div><?php } ?>
                            <?php if ($slider_link_text !== '' && $slider_link_url !== '') { ?>
                                <div class="main__slider-item-content-link">
                                    <a class="btn btn-style-1" <?= $target_blank; ?> href="<?= $slider_link_url; ?>"><?= $slider_link_text; ?></a>
                                </div><?php } ?>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>
