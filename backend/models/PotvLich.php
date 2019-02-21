<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "potv_lich".
 *
 * @property integer $p_id
 * @property string $p_guid
 * @property integer $p_dockind
 * @property integer $p_division
 * @property string $p_citizen
 * @property string $p_pk
 * @property string $p_surnamec
 * @property string $p_namec
 * @property string $p_patronymc
 * @property string $p_surnameL
 * @property string $p_nameL
 * @property string $p_patronymL
 * @property string $p_birth
 * @property integer $p_birthcomp
 * @property integer $p_sex
 * @property integer $p_nation
 * @property string $p_surnameold
 * @property string $p_nameold
 * @property string $p_patronymold
 * @property integer $p_countryb
 * @property integer $p_regionb
 * @property integer $p_districtb
 * @property string $p_birthb
 * @property string $p_birthe
 * @property integer $p_doctypeb
 * @property string $p_seryb
 * @property string $p_numberb
 * @property string $p_issuedbyb
 * @property string $p_datebegb
 * @property integer $p_country
 * @property integer $p_region
 * @property integer $p_district
 * @property integer $p_place
 * @property integer $p_street
 * @property string $p_house
 * @property string $p_korpus
 * @property string $p_flat
 * @property string $p_address
 * @property string $p_comment
 * @property string $p_dateenter
 * @property string $p_MVD_guid
 * @property string $p_surnameeng
 * @property string $p_nameeng
 * @property string $p_birthplaceeng
 */
class PotvLich extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'potv_lich';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_guid', 'p_dockind', 'p_division', 'p_surnameL', 'p_nameL', 'p_patronymL', 'p_birth', 'p_birthcomp', 'p_sex', 'p_nation', 'p_countryb', 'p_country', 'p_dateenter', 'p_MVD_guid'], 'required'],
            [['p_dockind', 'p_division', 'p_birthcomp', 'p_sex', 'p_nation', 'p_countryb', 'p_regionb', 'p_districtb', 'p_doctypeb', 'p_country', 'p_region', 'p_district', 'p_place', 'p_street'], 'integer'],
            [['p_birth', 'p_datebegb', 'p_dateenter'], 'safe'],
            [['p_guid', 'p_MVD_guid'], 'string', 'max' => 32],
            [['p_citizen'], 'string', 'max' => 12],
            [['p_pk'], 'string', 'max' => 14],
            [['p_surnamec', 'p_namec', 'p_patronymc', 'p_surnameL', 'p_nameL', 'p_patronymL', 'p_surnameold', 'p_nameold', 'p_patronymold', 'p_surnameeng', 'p_nameeng'], 'string', 'max' => 75],
            [['p_birthb', 'p_birthe'], 'string', 'max' => 64],
            [['p_seryb', 'p_numberb'], 'string', 'max' => 15],
            [['p_issuedbyb'], 'string', 'max' => 128],
            [['p_house'], 'string', 'max' => 100],
            [['p_korpus', 'p_flat'], 'string', 'max' => 50],
            [['p_address', 'p_comment'], 'string', 'max' => 400],
            [['p_birthplaceeng'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => Yii::t('app', 'P ID'),
            'p_guid' => Yii::t('app', 'P Guid'),
            'p_dockind' => Yii::t('app', 'P Dockind'),
            'p_division' => Yii::t('app', 'P Division'),
            'p_citizen' => Yii::t('app', 'P Citizen'),
            'p_pk' => Yii::t('app', 'P Pk'),
            'p_surnamec' => Yii::t('app', 'P Surnamec'),
            'p_namec' => Yii::t('app', 'P Namec'),
            'p_patronymc' => Yii::t('app', 'P Patronymc'),
            'p_surnameL' => Yii::t('app', 'P Surname L'),
            'p_nameL' => Yii::t('app', 'P Name L'),
            'p_patronymL' => Yii::t('app', 'P Patronym L'),
            'p_birth' => Yii::t('app', 'P Birth'),
            'p_birthcomp' => Yii::t('app', 'P Birthcomp'),
            'p_sex' => Yii::t('app', 'P Sex'),
            'p_nation' => Yii::t('app', 'P Nation'),
            'p_surnameold' => Yii::t('app', 'P Surnameold'),
            'p_nameold' => Yii::t('app', 'P Nameold'),
            'p_patronymold' => Yii::t('app', 'P Patronymold'),
            'p_countryb' => Yii::t('app', 'P Countryb'),
            'p_regionb' => Yii::t('app', 'P Regionb'),
            'p_districtb' => Yii::t('app', 'P Districtb'),
            'p_birthb' => Yii::t('app', 'P Birthb'),
            'p_birthe' => Yii::t('app', 'P Birthe'),
            'p_doctypeb' => Yii::t('app', 'P Doctypeb'),
            'p_seryb' => Yii::t('app', 'P Seryb'),
            'p_numberb' => Yii::t('app', 'P Numberb'),
            'p_issuedbyb' => Yii::t('app', 'P Issuedbyb'),
            'p_datebegb' => Yii::t('app', 'P Datebegb'),
            'p_country' => Yii::t('app', 'P Country'),
            'p_region' => Yii::t('app', 'P Region'),
            'p_district' => Yii::t('app', 'P District'),
            'p_place' => Yii::t('app', 'P Place'),
            'p_street' => Yii::t('app', 'P Street'),
            'p_house' => Yii::t('app', 'P House'),
            'p_korpus' => Yii::t('app', 'P Korpus'),
            'p_flat' => Yii::t('app', 'P Flat'),
            'p_address' => Yii::t('app', 'P Address'),
            'p_comment' => Yii::t('app', 'P Comment'),
            'p_dateenter' => Yii::t('app', 'P Dateenter'),
            'p_MVD_guid' => Yii::t('app', 'P  Mvd Guid'),
            'p_surnameeng' => Yii::t('app', 'P Surnameeng'),
            'p_nameeng' => Yii::t('app', 'P Nameeng'),
            'p_birthplaceeng' => Yii::t('app', 'P Birthplaceeng'),
        ];
    }
}
