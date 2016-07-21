<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?php
            $list = ArrayHelper::map($cities,'id','title');
            echo $form->field($model, 'city_id')->dropDownList($list, ['prompt'=>'Выбрать...']);
            ?>
        </div>
        <div class="col-md-4">
            <?php
            $list = ArrayHelper::map($projects,'id','title');
            echo $form->field($model, 'project_id')->dropDownList($list, ['prompt'=>'Выбрать...']);
            ?>
        </div>
        <div class="col-md-4">
            <?php
            $roles = ['менеджер' => 'Менеджер', 'дизайнер' => 'Дизайнер', 'программист' => 'Программист', 'тестировщик' => 'Тестировщик'];
            echo $form->field($model, 'role')->dropDownList($roles, ['prompt'=>'Выбрать...']);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
