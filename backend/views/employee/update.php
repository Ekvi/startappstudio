<?php

use common\models\City;
use common\models\Project;

/* @var $model common\models\Employee */

$this->title = 'Обновить: ' . $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fio, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>


<div class="employee-update">

    <?= $this->render('_form', [
        'model' => $model,
        'cities' => City::find()->all(),
        'projects' => Project::find()->all()
    ]) ?>

</div>
