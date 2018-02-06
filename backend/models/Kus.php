<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kus".
 *
 * @property string $id
 * @property integer $reg_num
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
 * @property string $birth_place_latin
 * @property string $doc_seria
 * @property integer $document_type_id
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
 * @property integer $senstatus
 * @property string $endate
 * @property integer $reason_id
 * @property string $status
 * @property string $adinfo
 * @property integer $consular_account_type
 */
class Kus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $verifyCode;


    public static function tableName()
    {
        return 'kus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['division_id', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'photo', 'sex_id', 'nationality_id', 'birth_country_id', 'doc_seria', 'document_type_id', 'doc_number', 'living_region_id', 'living_district_id', 'living_foreign_country_id', 'living_foreign_place', 'begin_date', 'marital_status_id'], 'required'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'living_foreign_country_id', 'other_citizenship_id', 'consular_account_type'], 'integer'],
            [['photo'], 'string'],
            [['date_begin_document', 'date_endocument', 'begin_date', 'arrival_date', 'creation_date', 'endate'], 'safe'],
            [['id'], 'string', 'max' => 32],
            //[['pinpp'], 'string', 'max' => 14],
            [['surname_latin', 'name_latin', 'patronym_latin'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 10],
            [['living_place_latin', 'living_foreign_place', 'work_place'], 'string', 'max' => 250],
            [['doc_seria'], 'string', 'max' => 12],
            [['doc_number', 'living_block', 'living_house', 'living_flat'], 'string', 'max' => 20],
            [['document_div_place'], 'string', 'max' => 128],
            [['foundation_cons_acc'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 1],

            //[['adinfo'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
           // 'reg_num' => 'Reg Num',
            'division_id' => Yii::t('app', 'Ro`yxatga turish manzili'),
           // 'pinpp' => 'Pinpp',
            //'surname_cyrillic' => 'Surname Cyrillic',
           // 'name_cyrillic' => 'Name Cyrillic',
           // 'patronym_cyrillic' => 'Patronym Cyrillic',
            'surname_latin' => Yii::t('app', 'Familiya'),
            'name_latin' => Yii::t('app', 'Ismi'),
            'patronym_latin' => Yii::t('app', 'Otasining ismi'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'photo' => Yii::t('app', 'Rasm'),
            'sex_id' => Yii::t('app', 'Jinsi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'marital_status_id' => Yii::t('app', 'Oilaviy holati'),
            'birth_country_id' => Yii::t('app', 'Tug\'ilgan davlati'),
            'birth_region_id' => Yii::t('app', 'Tug\'ilgan viloyati'),
            'birth_district_id' => Yii::t('app', 'Tug\'ilgan tumani'),
            //'birth_place_id' => Yii::t('app', 'Tug\'ilgan joyi'),
            //'birth_place_latin' => 'Birth Place Latin',
            'doc_seria' => Yii::t('app', 'Hujjat seriyasi'),
            'document_type_id' => Yii::t('app', 'Hujjat turi'),
            'doc_number' => Yii::t('app', 'Hujjat raqami'),
            'date_begin_document' => Yii::t('app', 'Hujjat berilgan sana'),
            'date_endocument' => Yii::t('app', 'Hujjat amal qilish sanasi'),
            'document_div_id' => Yii::t('app', 'Hujjat bergan tashkilot'),
            'document_div_place' => Yii::t('app', '(Agar ro`yhatda yo`q bo`lsa)'),
            'living_country_id' => Yii::t('app', 'Yashash mamlakati'),
            'living_region_id' => Yii::t('app', 'Yashash viloyati'),
            'living_district_id' => Yii::t('app', 'Yashash tumani'),
            'living_place_id' => Yii::t('app', 'Yashash mahallasi'),
            'living_street_id' => Yii::t('app', 'Yashash ko\'chasi'),
            'living_block' => Yii::t('app', 'Korpus'),
            'living_house' => Yii::t('app', 'Uy'),
            'living_flat' => Yii::t('app', 'Honadon'),
            'living_place_latin' => Yii::t('app', 'O`zbekistondagi manzili'),
            'living_foreign_country_id' => Yii::t('app', 'Kelgan davlati'),
            'living_foreign_place' => Yii::t('app', 'Chet eldagi manzili'),
            'begin_date' => Yii::t('app', 'Kelgan sanasi'),
            'work_place' => Yii::t('app', 'Ish joyi va lavozimi'),
            'other_citizenship_id' => Yii::t('app', 'Chet el fuqaroligini olganligi'),
            //'division_id' => 'division_id',
            //'doc_adinfo' => 'Doc Adinfo',
            'creation_date' => Yii::t('app', 'creation_date'),
            'foundation_cons_acc' => Yii::t('app', 'Ro`yxatga olishga asos'),
            //'living_uzb_place' => Yii::t('app', 'living_uzb_place'),
            //'senstatus' => 'Senstatus',
            'endate' => Yii::t('app', 'endate'),
            //'reason_id' => 'Reason ID',
            //'status' => 'status',
            //'adinfo' => 'Adinfo',
            'consular_account_type' => Yii::t('app', 'consular_account_type'),
            'verifyCode' => Yii::t('app', 'Kodni tekshiring'),
            ' Create' => Yii::t('app', 'Anketa yuklash'),
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

     public function getStreet()
    {
        return $this->hasOne(SpStreet::className(), ['sp_id' => 'living_street_id']);
    }

}