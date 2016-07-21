<?php


/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = 'Создать проект';
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
