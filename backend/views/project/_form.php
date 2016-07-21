<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php
            $list = [
                'проектирование' => 'Проектирование',
                'разработка' => 'Разработка',
                'тестирование' => 'Тестирование',
                'завершен' => 'Завершен'
            ];
            echo $form->field($model, 'status')->dropDownList($list, ['prompt'=>'Выбрать...']);
            ?>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
