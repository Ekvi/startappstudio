<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $fio
 * @property string $email
 * @property integer $city_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Employee extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'email', 'city_id', 'project_id'], 'required'],
            [['city_id', 'project_id', 'created_at', 'updated_at'], 'integer'],
            [['fio'], 'string', 'max' => 100],
            [['email', 'role'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 50],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fio' => 'ФИО',
            'email' => 'Е-майл',
            'city_id' => 'Город',
            'city' => 'Город',
            'project_id' => 'Проект',
            'project' => 'Проект',
            'role' => 'Роль',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлён',
        ];
    }

    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
    
    /**
     * Updates Employee's role in DB
     * @param string $role
     * @param integer $id
     * @return boolean
     */
    public static function updateRole($role, $id)
    {
        $employee = Employee::find()->where(['id' => $id])->one();

        if (!empty($employee)) {
            $employee->role = $role;
            return $employee->update();
        }

        return false;
    }

    /**
     * Gets name of the project by id
     * @param integer $id
     * @return string
     */
    public function getProjectName($id)
    {
        return Project::find()->select('title')->where(['id' => $id])->column()[0];
    }

    /**
     * Updates Employee's project in DB
     * @param string $projectName
     * @param integer $id
     * @return boolean
     */
    public static function updateProject($projectName, $id)
    {
        $projectId = Project::find()->select('id')->where(['title' => $projectName])->column()[0];
        $employee = Employee::find()->where(['id' => $id])->one();

        if (!empty($employee)) {
            $employee->project_id = $projectId;
            return $employee->update();
        }

        return false;
    }
}
