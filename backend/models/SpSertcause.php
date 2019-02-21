<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sp_sertcause".
 *
 * @property integer $sp_id
 * @property string $sp_name_ru
 * @property string $sp_name_uz
 */
class SpSertcause extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_sertcause';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sp_id'], 'required'],
            [['sp_id'], 'integer'],
            [['sp_name_ru', 'sp_name_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sp_id' => Yii::t('app', 'Sp ID'),
            'sp_name_ru' => Yii::t('app', 'Sp Name Ru'),
            'sp_name_uz' => Yii::t('app', 'Sp Name Uz'),
        ];
    }
}
