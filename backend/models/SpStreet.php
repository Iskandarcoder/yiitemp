<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sp_street".
 *
 * @property string $sp_id
 * @property string $sp_name_cryl
 * @property string $sp_name_ru
 * @property string $sp_name_qrc
 * @property string $sp_name_en
 * @property string $sp_name_uz
 * @property string $sp_name_qrl
 * @property string $sp_region
 * @property string $sp_district
 * @property string $sp_place
 * @property integer $sp_active
 * @property string $sp_dateenter
 * @property string $sp_scn
 * @property integer $sp_idold
 * @property integer $sp_idfirst
 */
class SpStreet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_street';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sp_id', 'sp_active', 'sp_dateenter', 'sp_scn'], 'required'],
            [['sp_id', 'sp_region', 'sp_district', 'sp_place', 'sp_active', 'sp_scn', 'sp_idold', 'sp_idfirst'], 'integer'],
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
            'sp_id' => 'Sp ID',
            'sp_name_cryl' => 'Sp Name Cryl',
            'sp_name_ru' => 'Sp Name Ru',
            'sp_name_qrc' => 'Sp Name Qrc',
            'sp_name_en' => 'Sp Name En',
            'sp_name_uz' => 'Sp Name Uz',
            'sp_name_qrl' => 'Sp Name Qrl',
            'sp_region' => 'Sp Region',
            'sp_district' => 'Sp District',
            'sp_place' => 'Sp Place',
            'sp_active' => 'Sp Active',
            'sp_dateenter' => 'Sp Dateenter',
            'sp_scn' => 'Sp Scn',
            'sp_idold' => 'Sp Idold',
            'sp_idfirst' => 'Sp Idfirst',
        ];
    }
}
