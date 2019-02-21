<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anketa_new".
 *
 * @property integer $p_id
 * @property string $p_guid
 * @property integer $p_dockind
 * @property integer $p_division
 * @property integer $p_citizen
 * @property integer $p_pk
 * @property string $p_surnamec
 * @property string $p_namec
 * @property string $p_patronymc
 * @property string $p_surnamel
 * @property string $p_namel
 * @property string $p_patronyml
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
 * @property string $p_datebegb
 * @property string $p_issuedbyb
 * @property integer $p_country
 * @property integer $p_region
 * @property integer $p_district
 * @property integer $p_place
 * @property integer $p_street
 * @property integer $p_certiftype
 * @property string $p_house
 * @property string $p_korpus
 * @property string $p_flat
 * @property string $p_address
 * @property integer $p_marital
 * @property string $p_dateendb
 * @property integer $p_countryout
 * @property string $p_addressout
 * @property integer $p_cause
 * @property integer $p_reasonb
 * @property string $p_reasonfull
 * @property string $p_dateout
 * @property string $p_dateenter
 * @property string $p_photo
 * @property string $p_work
 * @property string $p_datesent
 * @property integer $p_status
 * @property integer $p_lan
 */
class AnketaNew extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $verifyCode;
    public static function tableName()
    {
        return 'anketa_new';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_dockind', 'p_division', 'p_citizen', 'p_pk', 'p_birthcomp', 'p_sex', 'p_nation', 'p_countryb', 'p_regionb', 'p_districtb', 'p_doctypeb', 'p_country', 'p_region', 'p_district', 'p_place', 'p_street', 'p_certiftype', 'p_marital', 'p_countryout', 'p_cause', 'p_reasonb', 'p_status', 'p_lan'], 'integer'],
            [['p_surnamel', 'p_namel', 'p_patronyml', 'p_birth', 'p_countryb', 'p_cause', 'p_photo', 'p_division'], 'required'],
            [['p_datebegb', 'p_dateendb', 'p_dateout', 'p_dateenter', 'p_datesent'], 'safe'],
            [['p_photo'], 'string'],
            [['p_guid', 'p_flat'], 'string', 'max' => 50],
            [['p_surnamec', 'p_namec', 'p_patronymc', 'p_surnamel', 'p_namel', 'p_patronyml', 'p_surnameold', 'p_nameold', 'p_patronymold'], 'string', 'max' => 75],
            [['p_birth'], 'string', 'max' => 10],
            [['p_birthb', 'p_birthe'], 'string', 'max' => 60],
            [['p_seryb', 'p_numberb'], 'string', 'max' => 15],
            [['p_issuedbyb'], 'string', 'max' => 150],
            [['p_house'], 'string', 'max' => 100],
            [['p_korpus'], 'string', 'max' => 5],
            [['p_address', 'p_addressout', 'p_reasonfull'], 'string', 'max' => 400],
            [['p_work'], 'string', 'max' => 128],
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
            'p_surnamel' => Yii::t('app', 'P Surnamel'),
            'p_namel' => Yii::t('app', 'P Namel'),
            'p_patronyml' => Yii::t('app', 'P Patronyml'),
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
            'p_datebegb' => Yii::t('app', 'P Datebegb'),
            'p_issuedbyb' => Yii::t('app', 'P Issuedbyb'),
            'p_country' => Yii::t('app', 'P Country'),
            'p_region' => Yii::t('app', 'P Region'),
            'p_district' => Yii::t('app', 'P District'),
            'p_place' => Yii::t('app', 'P Place'),
            'p_street' => Yii::t('app', 'P Street'),
            'p_certiftype' => Yii::t('app', 'P Certiftype'),
            'p_house' => Yii::t('app', 'P House'),
            'p_korpus' => Yii::t('app', 'P Korpus'),
            'p_flat' => Yii::t('app', 'P Flat'),
            'p_address' => Yii::t('app', 'P Address'),
            'p_marital' => Yii::t('app', 'P Marital'),
            //'p_dateendb' => Yii::t('app', 'P Dateendb'),
            'p_countryout' => Yii::t('app', 'P Countryout'),
            'p_addressout' => Yii::t('app', 'P Addressout'),
            'p_cause' => Yii::t('app', 'P Cause'),
            'p_reasonb' => Yii::t('app', 'P Reasonb'),
            'p_reasonfull' => Yii::t('app', 'P Reasonfull'),
            'p_dateout' => Yii::t('app', 'P Dateout'),
            'p_dateenter' => Yii::t('app', 'P Dateenter'),
            'p_photo' => Yii::t('app', 'P Photo'),
            'p_work' => Yii::t('app', 'P Work'),
            'p_datesent' => Yii::t('app', 'P Datesent'),
            'p_status' => Yii::t('app', 'P Status'),
            'p_lan' => Yii::t('app', 'P Lan'),
        ];
    }

    public function setRandomString($length = 32)

    {

        $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ123456789';

        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {

            $randomString .= $characters[rand(0, $charactersLength - 1)];

        }

        $this->p_guid = $randomString;

    }

     public function getCountry()
    {
        return $this->hasOne(SpCountry::className(), ['sp_id' => 'p_countryb']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(SpRegion::className(), ['sp_id' => 'p_regionb']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(SpDistrict::className(), ['sp_id' => 'p_districtb']);
    }

    public function getInRelative()
    {
        return $this->hasMany(InRelative::className(), ['sert_id' => 'p_id']);
    }

    public function getDivision()
    {
        return $this->hasOne(SpDivision::className(), ['sp_id' => 'p_division']);
    }
     public function getStreet()
    {
        return $this->hasOne(SpStreet::className(), ['sp_id' => 'p_street']);
    }

    public function getNation()
    {
        return $this->hasOne(SpNation::className(), ['sp_id' => 'p_nation']);
    }
    public function getDoctype()
    {
        return $this->hasOne(SpDoctype::className(), ['sp_id' => 'p_doctypeb']);
    }
    public function getSertcause()
    {
        return $this->hasOne(SpSertcause::className(), ['sp_id' => 'p_cause']);
    }
    public function getReasonb()
    {
        return $this->hasOne(SpReasonb::className(), ['sp_id' => 'p_reasonb']);
    }
}
