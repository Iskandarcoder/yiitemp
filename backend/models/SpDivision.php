<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sp_division".
 *
 * @property integer $sp_id
 * @property string $sp_name_cryl
 * @property string $sp_name_ru
 * @property string $sp_name_qrc
 * @property string $sp_name_en
 * @property string $sp_name_uz
 * @property string $sp_name_qrl
 * @property integer $sp_country
 * @property integer $sp_region
 * @property integer $sp_district
 * @property integer $sp_level
 * @property integer $sp_code
 * @property integer $sp_isbio
 * @property integer $sp_active
 * @property string $sp_dateenter
 * @property string $sp_scn
 * @property integer $sp_idold
 * @property integer $sp_idfirst
 */
class SpDivision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_division';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sp_id', 'sp_level', 'sp_isbio', 'sp_active', 'sp_dateenter', 'sp_scn'], 'required'],
            [['sp_id', 'sp_country', 'sp_region', 'sp_district', 'sp_level', 'sp_code', 'sp_isbio', 'sp_active', 'sp_scn', 'sp_idold', 'sp_idfirst'], 'integer'],
            [['sp_dateenter'], 'safe'],
            [['sp_name_cryl', 'sp_name_ru', 'sp_name_qrc', 'sp_name_en', 'sp_name_uz', 'sp_name_qrl'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sp_id' => Yii::t('app', 'Sp ID'),
            'sp_name_cryl' => Yii::t('app', 'Sp Name Cryl'),
            'sp_name_ru' => Yii::t('app', 'Sp Name Ru'),
            'sp_name_qrc' => Yii::t('app', 'Sp Name Qrc'),
            'sp_name_en' => Yii::t('app', 'Sp Name En'),
            'sp_name_uz' => Yii::t('app', 'Sp Name Uz'),
            'sp_name_qrl' => Yii::t('app', 'Sp Name Qrl'),
            'sp_country' => Yii::t('app', 'Sp Country'),
            'sp_region' => Yii::t('app', 'Sp Region'),
            'sp_district' => Yii::t('app', 'Sp District'),
            'sp_level' => Yii::t('app', 'Sp Level'),
            'sp_code' => Yii::t('app', 'Sp Code'),
            'sp_isbio' => Yii::t('app', 'Sp Isbio'),
            'sp_active' => Yii::t('app', 'Sp Active'),
            'sp_dateenter' => Yii::t('app', 'Sp Dateenter'),
            'sp_scn' => Yii::t('app', 'Sp Scn'),
            'sp_idold' => Yii::t('app', 'Sp Idold'),
            'sp_idfirst' => Yii::t('app', 'Sp Idfirst'),
        ];
    }
}
