<?php

use common\models\City;
use common\models\Project;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = 'Добавить сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="employee-create">

    <?= $this->render('_form', [
        'model' => $model,
        'cities' => City::find()->all(),
        'projects' => Project::find()->all()
    ]) ?>

</div>
