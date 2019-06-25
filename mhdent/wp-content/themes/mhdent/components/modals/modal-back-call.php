<?php

/**
 * Вспывающая форма "Обратный звонок"
 */

$frontpage_id = get_option('page_on_front');

$backCallForm = CFS()->get('back_call_form', $frontpage_id);

?>

<div class="modal fade" id="modalBackCallForm" tabindex="-1" role="dialog" aria-labelledby="modalBackCallFormTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBackCallFormTitle"><?php pll_e('Заказать обратный звонок') ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                echo do_shortcode($backCallForm);

                ?>
            </div>
        </div>
    </div>
</div>
