<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны, что хотите удалить этого сотрудника?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fio',
            'email:email',
            [
                'attribute' => 'city.title',
                'label' => 'Город',
            ],
            [
                'attribute' => 'project.title',
                'label' => 'Проект',
            ],
            'role',
            [
                'label' => 'Добавлено',
                'value' =>  date('d-m-Y H:i:s',  $model->created_at),
            ],
            [
                'label' => 'Обновленно',
                'value' =>  date('d-m-Y H:i:s',  $model->updated_at),
            ],
        ],
    ]) ?>

</div>
