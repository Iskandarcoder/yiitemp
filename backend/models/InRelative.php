<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "in_relative".
 *
 * @property integer $id
 * @property string $reg_num
 * @property integer $type_relative
 * @property string $fio
 * @property string $address
 */
class InRelative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_relative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['reg_num', 'type_relative', 'fio', 'address'], 'required'],
            [['type_relative'], 'integer'],
            [['address'], 'string'],
            [['reg_num', 'fio'], 'string', 'max' => 255],
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
            'type_relative' => Yii::t('app', 'Type Relative'),
            'fio' => Yii::t('app', 'Fio'),
            'address' => Yii::t('app', 'Address'),
        ];
    }
}
