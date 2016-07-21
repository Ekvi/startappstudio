<?php

use frontend\widgets\RoleWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <p>
        <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'fio',
            'email:email',
            [
                'attribute' => 'city',
                'value' => 'city.title'
            ],
           /* [
                'attribute' => 'project',
                //'value' => 'project.title'
                //'attribute' => 'project_id',
                'format' => 'raw',
                //'label' => 'Проект',
                'value' => function ($model) {
                    return '<div class=" btn-project ">' . Html::a($model->project_id, '#', [
                    //return '<div class=" btn-project ">' . Html::a(project.title, '#', [
                        'data' => [
                            'target' => '#change-project',
                            'toggle' => 'modal',
                            'order-id' => $model->id
                        ]
                    ]) . '</div>';
                },
            ],*/
            [
                'attribute'=> 'project_id',
                'format' => 'raw',
                'value' => function($model) {
                    return '<div class="btn-project">' . Html::a(
                        $model->getProjectName($model->project_id), '#', [
                        'data' => [
                            'target' => '#change-project',
                            'toggle' => 'modal',
                            'project-id' => $model->id
                        ]
                    ]). '</div>';
                },
            ],
            [
                'attribute' => 'role',
                'format' => 'raw',
                'label' => 'Роль',
                'contentOptions' => function ($model) {
                    if($model->role == 'дизайнер') {
                        return ['class' => 'active'];
                    } else if($model->role == 'тестировщик') {
                        return ['class' => 'danger'];
                    } else if($model->role == 'программист') {
                        return ['class' => 'success'];
                    } else if($model->role == 'менеджер') {
                        return ['class' => 'info'];
                    } else {
                        return ['class' => 'default'];
                    }
                },
                'value' => function ($model) {
                    return '<div class=" btn-role ">' . Html::a($model->role, '#', [
                        'data' => [
                            'target' => '#change-role',
                            'toggle' => 'modal',
                            'role-id' => $model->id
                        ]
                    ]) . '</div>';
                },
            ],
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
                            $searchModel, 'id', array('Выбрать...','дизайнер', 'тестировщик', 'программист', 'менеджер')); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="role-confirm"  type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div id="change-project" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменить проект</h4>
                </div>
                <div class="modal-body">
                    <p>Проекты:</p>
                    <div id="project">
                        <?php $list = ArrayHelper::map($projects,'id','title');?>
                        <?= Html::activeDropDownList($searchModel, 'id', $list, ['id' => 'select-project']); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="project-confirm"  type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/js/employee.js' , ['depends' => 'yii\web\JqueryAsset']); ?>


