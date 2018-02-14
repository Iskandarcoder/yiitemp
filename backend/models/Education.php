<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property integer $id
 * @property string $reg_num
 * @property string $type_edu
 * @property string $end_date
 * @property string $name
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reg_num', 'type_edu', 'end_date', 'name'], 'required'],
            [['end_date'], 'safe'],
            [['name'], 'string'],
            [['reg_num', 'type_edu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'reg_num' => Yii::t('app', 'Reg Num'),
            'type_edu' => Yii::t('app', 'Type Edu'),
            'end_date' => Yii::t('app', 'End Date'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
