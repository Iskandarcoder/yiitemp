<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sert".
 *
 * @property string $id
 * @property string $id_mvd
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
 * @property integer $birth_street_id
 * @property string $birth_block
 * @property string $birth_house
 * @property string $birth_flat
 * @property string $birth_place_latin
 * @property integer $document_type
 * @property string $doc_seria
 * @property string $doc_number
 * @property string $date_begin_document
 * @property string $date_end_document
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
 * @property integer $living_foreign_country_id
 * @property string $living_foreign_place
 * @property integer $arrival_reason_id
 * @property string $arrival_date
 * @property integer $cause_id
 * @property string $work
 * @property string $certificate_seria
 * @property string $certificate_number
 * @property string $certificate_date
 * @property string $validity_date_certificate
 * @property string $living_uzb_place
 * @property string $creation_date
 * @property string $send_status
 * @property string $status_mvd
 * @property string $date_mvd
 * @property string $comment
 * @property string $print_status
 * @property string $annul_status
 * @property string $oplata
 * @property string $rasxod
 * @property string $nazorat
 * @property string $Fam
 * @property string $Ism
 * @property string $Sharif
 * @property string $Tug_Sana
 * @property string $surname_eng
 * @property string $name_eng
 */
class Sert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'division_id', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'photo', 'sex_id', 'nationality_id', 'birth_country_id', 'document_type', 'doc_seria', 'doc_number', 'date_begin_document', 'living_country_id', 'living_region_id', 'living_district_id', 'living_foreign_country_id', 'arrival_reason_id', 'arrival_date', 'cause_id', 'creation_date', 'send_status'], 'required'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'birth_street_id', 'document_type', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'living_foreign_country_id', 'arrival_reason_id', 'cause_id'], 'integer'],
            [['photo'], 'string'],
            [['date_begin_document', 'date_end_document', 'arrival_date', 'certificate_date', 'validity_date_certificate', 'creation_date', 'date_mvd', 'Tug_Sana'], 'safe'],
            [['id', 'id_mvd', 'Fam', 'Ism', 'Sharif'], 'string', 'max' => 32],
            [['pinpp'], 'string', 'max' => 14],
            [['surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin', 'surname_eng', 'name_eng'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 10],
            [['birth_block', 'birth_house', 'birth_flat', 'doc_number', 'living_block', 'living_house', 'living_flat'], 'string', 'max' => 20],
            [['birth_place_latin', 'living_foreign_place', 'living_uzb_place'], 'string', 'max' => 250],
            [['doc_seria', 'certificate_number', 'oplata', 'rasxod'], 'string', 'max' => 12],
            [['document_div_place', 'work'], 'string', 'max' => 128],
            [['certificate_seria'], 'string', 'max' => 6],
            [['send_status', 'status_mvd', 'print_status', 'annul_status', 'nazorat'], 'string', 'max' => 1],
            [['comment'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_mvd' => Yii::t('app', 'Id Mvd'),
            'division_id' => Yii::t('app', 'Division ID'),
            'pinpp' => Yii::t('app', 'Pinpp'),
            'surname_cyrillic' => Yii::t('app', 'Surname Cyrillic'),
            'name_cyrillic' => Yii::t('app', 'Name Cyrillic'),
            'patronym_cyrillic' => Yii::t('app', 'Patronym Cyrillic'),
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
            'birth_place_id' => Yii::t('app', 'Birth Place ID'),
            'birth_street_id' => Yii::t('app', 'Birth Street ID'),
            'birth_block' => Yii::t('app', 'Birth Block'),
            'birth_house' => Yii::t('app', 'Birth House'),
            'birth_flat' => Yii::t('app', 'Birth Flat'),
            'birth_place_latin' => Yii::t('app', 'Birth Place Latin'),
            'document_type' => Yii::t('app', 'Document Type'),
            'doc_seria' => Yii::t('app', 'Doc Seria'),
            'doc_number' => Yii::t('app', 'Doc Number'),
            'date_begin_document' => Yii::t('app', 'Date Begin Document'),
            'date_end_document' => Yii::t('app', 'Date End Document'),
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
            'living_foreign_country_id' => Yii::t('app', 'Living Foreign Country ID'),
            'living_foreign_place' => Yii::t('app', 'Living Foreign Place'),
            'arrival_reason_id' => Yii::t('app', 'Arrival Reason ID'),
            'arrival_date' => Yii::t('app', 'Arrival Date'),
            'cause_id' => Yii::t('app', 'Cause ID'),
            'work' => Yii::t('app', 'Work'),
            'certificate_seria' => Yii::t('app', 'Certificate Seria'),
            'certificate_number' => Yii::t('app', 'Certificate Number'),
            'certificate_date' => Yii::t('app', 'Certificate Date'),
            'validity_date_certificate' => Yii::t('app', 'Validity Date Certificate'),
            'living_uzb_place' => Yii::t('app', 'Living Uzb Place'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'send_status' => Yii::t('app', 'Send Status'),
            'status_mvd' => Yii::t('app', 'Status Mvd'),
            'date_mvd' => Yii::t('app', 'Date Mvd'),
            'comment' => Yii::t('app', 'Comment'),
            'print_status' => Yii::t('app', 'Print Status'),
            'annul_status' => Yii::t('app', 'Annul Status'),
            'oplata' => Yii::t('app', 'Oplata'),
            'rasxod' => Yii::t('app', 'Rasxod'),
            'nazorat' => Yii::t('app', 'Nazorat'),
            'Fam' => Yii::t('app', 'Fam'),
            'Ism' => Yii::t('app', 'Ism'),
            'Sharif' => Yii::t('app', 'Sharif'),
            'Tug_Sana' => Yii::t('app', 'Tug  Sana'),
            'surname_eng' => Yii::t('app', 'Surname Eng'),
            'name_eng' => Yii::t('app', 'Name Eng'),
        ];
    }
}
