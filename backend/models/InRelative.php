<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "in_relative".
 *
 * @property integer $id
 * @property string $kus_id
 * @property string $vkus_id
 * @property string $sert_id
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
            [['type_relative'], 'integer'],
            [['address'], 'string'],
            [['kus_id', 'vkus_id', 'sert_id', 'fio'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kus_id' => Yii::t('app', 'Kus ID'),
            'vkus_id' => Yii::t('app', 'Vkus ID'),
            'sert_id' => Yii::t('app', 'Sert ID'),
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
