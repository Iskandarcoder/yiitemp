<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property integer $id
 * @property string $uz_type_edu
 * @property string $ru_type_edu
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
            [['uz_type_edu', 'ru_type_edu'], 'required'],
            [['uz_type_edu', 'ru_type_edu'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uz_type_edu' => Yii::t('app', 'Mutaxassisligi'),
            'ru_type_edu' => Yii::t('app', 'Mutaxassisligi'),
        ];
    }
}
