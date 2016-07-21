<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $title
 */
class Project extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
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
            [['title', 'description', 'status'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['status'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'description' => 'Описание',
            'status' => 'Статус',
            'created_at' => 'Созданно',
            'updated_at' => 'Обновленно',
        ];
    }

    /**
     * Updates Employee's project in DB
     * @param string $project
     * @param integer $id
     * @return boolean
     */
    public static function updateProject($projectName)
    {
        $project = Project::find()->where(['title' => $projectName])->one();

        if (!empty($project)) {
            $pro->project = $project;
            return $employee->update();
        }

        return false;
    }
}
