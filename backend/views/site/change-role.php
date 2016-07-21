<?php
use yii\helpers\Html;

?>

<div id="change-role" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменить роль</h4>
            </div>
            <div class="modal-body">
                <p>Роли:</p>
                <div id="role">
                    <?= Html::activeDropDownList(
                        $employees, 'id', array('Выбрать...','дизайнер', 'тестировщик', 'программист', 'менеджер')); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button id="role-confirm"  type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>