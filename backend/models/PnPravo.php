<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pn_pravo".
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
 * @property integer $victim_type
 * @property string $arrival_date
 * @property string $offense_article
 * @property integer $offense_id
 * @property integer $penalty_id
 * @property integer $human_traffic
 * @property integer $fabula_id
 * @property string $doc_add_info
 * @property string $creation_date
 * @property string $living_uzb_place
 * @property string $add_info
 * @property integer $living_foreign_country_id
 * @property string $living_foreign_place
 * @property string $Send_status
 */
class PnPravo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pn_pravo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'division_id', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'sex_id', 'nationality_id', 'birth_country_id', 'document_type_id', 'date_begin_document', 'living_country_id', 'living_region_id', 'living_district_id', 'victim_type', 'arrival_date', 'human_traffic', 'doc_add_info', 'creation_date', 'living_foreign_country_id', 'living_foreign_place'], 'required'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'victim_type', 'offense_id', 'penalty_id', 'human_traffic', 'fabula_id', 'living_foreign_country_id'], 'integer'],
            [['date_begin_document', 'date_end_document', 'arrival_date', 'creation_date'], 'safe'],
            [['id'], 'string', 'max' => 32],
            [['pinpp'], 'string', 'max' => 14],
            [['surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 10],
            [['birth_place_latin', 'document_div_place', 'offense_article', 'doc_add_info', 'living_uzb_place', 'living_foreign_place'], 'string', 'max' => 250],
            [['doc_seria'], 'string', 'max' => 12],
            [['doc_number', 'living_block', 'living_house', 'living_flat'], 'string', 'max' => 20],
            [['add_info'], 'string', 'max' => 1024],
            [['Send_status'], 'string', 'max' => 1],
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
            'victim_type' => Yii::t('app', 'Victim Type'),
            'arrival_date' => Yii::t('app', 'Arrival Date'),
            'offense_article' => Yii::t('app', 'Offense Article'),
            'offense_id' => Yii::t('app', 'Offense ID'),
            'penalty_id' => Yii::t('app', 'Penalty ID'),
            'human_traffic' => Yii::t('app', 'Human Traffic'),
            'fabula_id' => Yii::t('app', 'Fabula ID'),
            'doc_add_info' => Yii::t('app', 'Doc Add Info'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'living_uzb_place' => Yii::t('app', 'Living Uzb Place'),
            'add_info' => Yii::t('app', 'Add Info'),
            'living_foreign_country_id' => Yii::t('app', 'Living Foreign Country ID'),
            'living_foreign_place' => Yii::t('app', 'Living Foreign Place'),
            'Send_status' => Yii::t('app', 'Send Status'),
        ];
    }
}
