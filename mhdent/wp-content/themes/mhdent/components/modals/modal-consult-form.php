<?php

/**
 * Вспывающая форма "Получить консультацию"
 */

$frontpage_id = get_option('page_on_front');

$consultForm = CFS()->get('consult_form', $frontpage_id);

if (pll_current_language() == 'ru') {
    $form = '[contact-form-7 id="201" title="Форма Получить консультацию"]';
} else {
    $form = '';
}

?>

<div class="modal fade" id="modalConsultForm" tabindex="-1" role="dialog" aria-labelledby="modalConsultFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConsultFormTitle">Получить консультацию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                echo do_shortcode($consultForm);

                ?>
            </div>
        </div>
    </div>
</div>
