<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dead".
 *
 * @property string $id
 * @property integer $division_id
 * @property string $pinpp
 * @property string $surname_cyrillic
 * @property string $name_cyrillic
 * @property string $patronym_cyrillic
 * @property string $surname_latin
 * @property string $name_latin
 * @property string $patronym_latin
 * @property string $birth_date
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
 * @property integer $death_country_id
 * @property string $death_foreign_place
 * @property integer $dead_missing_type
 * @property string $death_date
 * @property string $death_cause
 * @property string $death_certificate_seria
 * @property string $death_certificate_number
 * @property string $death_certificate_date
 * @property string $death_certificate_give_org
 * @property string $creation_date
 * @property string $living_uzb_place
 * @property string $send_status
 * @property string $add_info
 */
class Dead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dead';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'division_id', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'sex_id', 'nationality_id', 'birth_country_id', 'document_type_id', 'doc_seria', 'doc_number', 'date_begin_document', 'living_country_id', 'living_region_id', 'living_district_id', 'death_country_id', 'dead_missing_type', 'death_cause', 'creation_date', 'send_status'], 'required'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'death_country_id', 'dead_missing_type'], 'integer'],
            [['date_begin_document', 'date_end_document', 'death_date', 'death_certificate_date', 'creation_date'], 'safe'],
            [['id'], 'string', 'max' => 32],
            [['pinpp'], 'string', 'max' => 14],
            [['surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 10],
            [['birth_place_latin', 'death_foreign_place', 'living_uzb_place'], 'string', 'max' => 250],
            [['doc_seria', 'death_certificate_number'], 'string', 'max' => 12],
            [['doc_number', 'living_block', 'living_house', 'living_flat'], 'string', 'max' => 20],
            [['document_div_place'], 'string', 'max' => 128],
            [['death_cause'], 'string', 'max' => 200],
            [['death_certificate_seria'], 'string', 'max' => 6],
            [['death_certificate_give_org'], 'string', 'max' => 150],
            [['send_status'], 'string', 'max' => 1],
            [['add_info'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'division_id' => Yii::t('app', 'Division ID'),
            'pinpp' => Yii::t('app', 'Pinpp'),
            'surname_cyrillic' => Yii::t('app', 'Surname Cyrillic'),
            'name_cyrillic' => Yii::t('app', 'Name Cyrillic'),
            'patronym_cyrillic' => Yii::t('app', 'Patronym Cyrillic'),
            'surname_latin' => Yii::t('app', 'Surname Latin'),
            'name_latin' => Yii::t('app', 'Name Latin'),
            'patronym_latin' => Yii::t('app', 'Patronym Latin'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'sex_id' => Yii::t('app', 'Sex ID'),
            'nationality_id' => Yii::t('app', 'Nationality ID'),
            'marital_status_id' => Yii::t('app', 'Marital Status ID'),
            'birth_country_id' => Yii::t('app', 'Birth Country ID'),
            'birth_region_id' => Yii::t('app', 'Birth Region ID'),
            'birth_district_id' => Yii::t('app', 'Birth District ID'),
            'birth_place_id' => Yii::t('app', 'Birth Place ID'),
            'birth_place_latin' => Yii::t('app', 'Birth Place Latin'),
            'document_type_id' => Yii::t('app', 'Document Type ID'),
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
            'death_country_id' => Yii::t('app', 'Death Country ID'),
            'death_foreign_place' => Yii::t('app', 'Death Foreign Place'),
            'dead_missing_type' => Yii::t('app', 'Dead Missing Type'),
            'death_date' => Yii::t('app', 'Death Date'),
            'death_cause' => Yii::t('app', 'Death Cause'),
            'death_certificate_seria' => Yii::t('app', 'Death Certificate Seria'),
            'death_certificate_number' => Yii::t('app', 'Death Certificate Number'),
            'death_certificate_date' => Yii::t('app', 'Death Certificate Date'),
            'death_certificate_give_org' => Yii::t('app', 'Death Certificate Give Org'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'living_uzb_place' => Yii::t('app', 'Living Uzb Place'),
            'send_status' => Yii::t('app', 'Send Status'),
            'add_info' => Yii::t('app', 'Add Info'),
        ];
    }
}
