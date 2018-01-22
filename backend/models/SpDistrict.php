<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sp_district".
 *
 * @property string $sp_id
 * @property string $sp_name00
 * @property string $sp_name01
 * @property string $sp_name02
 * @property string $sp_name03
 * @property string $sp_name04
 * @property string $sp_name05
 * @property string $sp_region
 * @property integer $sp_active
 * @property string $sp_dateenter
 * @property string $sp_scn
 * @property integer $sp_idold
 * @property integer $sp_idfirst
 */
class SpDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sp_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sp_id', 'sp_active', 'sp_dateenter', 'sp_scn'], 'required'],
            [['sp_id', 'sp_region', 'sp_active', 'sp_scn', 'sp_idold', 'sp_idfirst'], 'integer'],
            [['sp_dateenter'], 'safe'],
            [['sp_name00', 'sp_name01', 'sp_name02', 'sp_name03', 'sp_name04', 'sp_name05'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sp_id' => 'Sp ID',
            'sp_name00' => 'Sp Name00',
            'sp_name01' => 'Sp Name01',
            'sp_name02' => 'Sp Name02',
            'sp_name03' => 'Sp Name03',
            'sp_name04' => 'Sp Name04',
            'sp_name05' => 'Sp Name05',
            'sp_region' => 'Sp Region',
            'sp_active' => 'Sp Active',
            'sp_dateenter' => 'Sp Dateenter',
            'sp_scn' => 'Sp Scn',
            'sp_idold' => 'Sp Idold',
            'sp_idfirst' => 'Sp Idfirst',
        ];
    }
}
