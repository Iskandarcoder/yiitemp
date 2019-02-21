<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "out_relative".
 *
 * @property integer $id
 * @property string $reg_num
 * @property integer $type_relative
 * @property string $fio
 * @property string $address
 */
class OutRelative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'out_relative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_relative'], 'integer'],
            [['address'], 'string'],
            [['kus_id','vkus_id','fio'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_relative' => Yii::t('app', 'Type Relative'),
            'fio' => Yii::t('app', 'Fio'),
            'address' => Yii::t('app', 'Address'),
        ];
    }

    public function getTyperelative()
    {
        return $this->hasOne(TypeRelative::className(), ['id' => 'type_relative']);
    }
}
