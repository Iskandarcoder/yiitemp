<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vkus".
 *
 * @property string $id
 * @property string $reg_num
 * @property integer $division_id
 * @property string $pinpp
 * @property string $surname_cyrillic
 * @property string $name_cyrillic
 * @property string $patronym_cyrillic
 * @property string $surname_latin
 * @property string $name_latin
 * @property string $patronym_latin
 * @property string $birth_date
 * @property resource $photo
 * @property integer $sex_id
 * @property integer $nationality_id
 * @property integer $marital_status_id
 * @property integer $birth_country_id
 * @property integer $birth_region_id
 * @property integer $birth_district_id
 * @property integer $birth_place_id
 * @property string $birth_place_latin
 * @property integer $document_type_id
 * @property string $doc_seria
 * @property string $doc_number
 * @property string $date_begin_document
 * @property string $date_endocument
 * @property integer $document_div_id
 * @property string $document_div_place
 * @property integer $living_country_id
 * @property integer $living_region_id
 * @property integer $living_district_id
 * @property integer $living_place_id
 * @property integer $living_street_id
 * @property string $living_block
 * @property string $living_house
 * @property string $living_flat
 * @property string $living_place_latin
 * @property integer $living_foreign_country_id
 * @property string $living_foreign_place
 * @property string $begin_date
 * @property string $arrival_date
 * @property string $work_place
 * @property integer $other_citizenship_id
 * @property string $doc_adinfo
 * @property string $creation_date
 * @property string $foundation_cons_acc
 * @property string $living_uzb_place
 * @property string $senstatus
 * @property string $endate
 * @property integer $reason_id
 * @property string $status
 * @property string $adinfo
 */
class Vkus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $verifyCode;
     
    public static function tableName()
    {
        return 'vkus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'division_id', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'photo', 'sex_id', 'nationality_id', 'birth_country_id', 'document_type_id', 'doc_seria', 'doc_number', 'living_region_id', 'living_district_id', 'living_foreign_country_id', 'living_foreign_place', 'begin_date', 'education', 'education_date', 'which_school'], 'required'],

            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'living_foreign_country_id', 'other_citizenship_id', 'consular_account_type'], 'integer'],
            [['photo'], 'string'],
            [['date_begin_document', 'date_endocument', 'begin_date', 'arrival_date', 'creation_date', 'endate'], 'safe'],
            [['id'], 'string', 'max' => 32],
            [['reg_num'], 'string', 'max' => 15],
           // [['pinpp'], 'string', 'max' => 14],
            [['surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 10],
            [['birth_place_latin', 'living_place_latin', 'living_foreign_place', 'work_place', 'doc_adinfo', 'living_uzb_place'], 'string', 'max' => 250],
            [['doc_seria'], 'string', 'max' => 12],
            [['doc_number', 'living_block', 'living_house', 'living_flat'], 'string', 'max' => 20],
            [['document_div_place'], 'string', 'max' => 128],
            [['foundation_cons_acc'], 'string', 'max' => 100],
            [['senstatus', 'status'], 'string', 'max' => 1],
            //[['adinfo'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {

        return [
            'id' => Yii::t('app', 'ID'),
            //'reg_num' => Yii::t('app', 'Reg Num'),
            'division_id' => Yii::t('app', 'Division ID'),
            //'pinpp' => Yii::t('app', 'Pinpp'),
            //'surname_cyrillic' => Yii::t('app', 'Surname Cyrillic'),
            //'name_cyrillic' => Yii::t('app', 'Name Cyrillic'),
            //'patronym_cyrillic' => Yii::t('app', 'Patronym Cyrillic'),
            'surname_latin' => Yii::t('app', 'Surname Latin'),
            'name_latin' => Yii::t('app', 'Name Latin'),
            'patronym_latin' => Yii::t('app', 'Patronym Latin'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'photo' => Yii::t('app', 'Photo'),
            'sex_id' => Yii::t('app', 'Sex ID'),
            'nationality_id' => Yii::t('app', 'Nationality ID'),
            'marital_status_id' => Yii::t('app', 'Marital Status ID'),
            'birth_country_id' => Yii::t('app', 'Birth Country ID'),
            'birth_region_id' => Yii::t('app', 'Birth Region ID'),
            'birth_district_id' => Yii::t('app', 'Birth District ID'),
            //'birth_place_id' => Yii::t('app', 'Birth Place ID'),
            //'birth_place_latin' => Yii::t('app', 'Birth Place Latin'),
            'doc_seria' => Yii::t('app', 'Doc Seria'),
            'document_type_id' => Yii::t('app', 'Document Type ID'),
            'doc_number' => Yii::t('app', 'Doc Number'),
            'date_begin_document' => Yii::t('app', 'Date Begin Document'),
            'date_endocument' => Yii::t('app', 'Date Endocument'),
            'document_div_id' => Yii::t('app', 'Document Div ID'),
            'document_div_place' => Yii::t('app', 'Document Div Place'),
            'living_country_id' => Yii::t('app', 'Living Country ID'),
            'living_region_id' => Yii::t('app', 'Living Region ID'),
            'living_district_id' => Yii::t('app', 'Living District ID'),
            'living_place_id' => Yii::t('app', 'Living Place ID'),
            'living_street_id' => Yii::t('app', 'Living Street ID'),
            'living_block' => Yii::t('app', 'Living Block'),
            'living_house' => Yii::t('app', 'Living House'),
            'living_flat' => Yii::t('app', 'Living Flat'),
            'living_place_latin' => Yii::t('app', 'Living Place Latin'),
            'living_foreign_country_id' => Yii::t('app', 'Living Foreign Country ID'),
            'living_foreign_place' => Yii::t('app', 'Living Foreign Place'),
            'begin_date' => Yii::t('app', 'Begin Date'),
            //'arrival_date' => Yii::t('app', 'Arrival Date'),
            'work_place' => Yii::t('app', 'Work Place'),
            'other_citizenship_id' => Yii::t('app', 'Other Citizenship ID'),
            //'doc_adinfo' => Yii::t('app', 'Doc Adinfo'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'foundation_cons_acc' => Yii::t('app', 'Foundation Cons Acc'),
            //'living_uzb_place' => Yii::t('app', 'Living Uzb Place'),
            //'senstatus' => Yii::t('app', 'Senstatus'),
            'endate' => Yii::t('app', 'Endate'),
            //'reason_id' => Yii::t('app', 'Reason ID'),
            //'status' => Yii::t('app', 'Status'),
            //'adinfo' => Yii::t('app', 'Adinfo'),
            'consular_account_type' => Yii::t('app', 'consular_account_type'),
            'verifyCode' => Yii::t('app', 'Kodni tekshiring'),
            ' Create' => Yii::t('app', 'Anketa yuklash'),
            'wed_name' => Yii::t('app', 'Wed Name'),
            'education' => Yii::t('app', 'Education'),
            'education_date' => Yii::t('app', 'Education Date'),
            'which_school' => Yii::t('app', 'Which School'),
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

        $this->id = $randomString;

    }

    public function getCountry()
    {
        return $this->hasOne(SpCountry::className(), ['sp_id' => 'birth_country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(SpRegion::className(), ['sp_id' => 'birth_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(SpDistrict::className(), ['sp_id' => 'birth_district_id']);
    }

    public function getPlace()
    {
        return $this->hasOne(SpPlase::className(), ['sp_id' => 'birth_place_id']);
    }

    public function getAdstreet()
    {
        return $this->hasOne(SpStreet::className(), ['sp_id' => 'living_street_id']);
    }

    public function getInRelative()
    {
        return $this->hasMany(InRelative::className(), ['vkus_id' => 'id']);
    }

    public function getOutRelative()
    {
        return $this->hasMany(OutRelative::className(), ['vkus_id' => 'id']);
    }

    public function getNation()
    {
        return $this->hasOne(SpNation::className(), ['sp_id' => 'nationality_id']);
    }

     public function getTeducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'education']);
    }
    public function getAdregion()
    {
        return $this->hasOne(SpRegion::className(), ['sp_id' => 'living_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddistrict()
    {
        return $this->hasOne(SpDistrict::className(), ['sp_id' => 'living_district_id']);
    }

    public function getAdplace()
    {
        return $this->hasOne(SpPlace::className(), ['sp_id' => 'living_place_id']);
    }

    public function getDoctype()
    {
        return $this->hasOne(SpDoctype::className(), ['sp_id' => 'document_type_id']);
    }
    
    public function getDivision()
    {
        return $this->hasOne(SpDivision::className(), ['sp_id' => 'document_div_id']);
    }
}
