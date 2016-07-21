<?php

use kartik\editable\Editable;
use yii\helpers\Html;
use yii\grid\GridView;
//use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-index">

    <p>
        <?= Html::a('Создать проект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model) {
            if($model->status == 'проектирование') {
                return ['class' => 'active'];
            } else if($model->status == 'разработка') {
                return ['class' => 'info'];
            } else if($model->status == 'тестирование') {
                return ['class' => 'warning'];
            } else {
                return ['class' => 'success'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'status',
            'description',
            [
                'attribute' => 'created_at',
                'label' => 'Созданно',
                'format' => ['date', 'php:d-m-yy H:i:s'],
            ],
            [
                'attribute' => 'updated_at',
                'label' => 'Обновленно',
                'format' => ['date', 'php:d-m-yy H:i:s'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
