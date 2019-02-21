<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sert;

/**
 * SertSearch represents the model behind the search form about `backend\models\Sert`.
 */
class SertSearch extends Sert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_mvd', 'pinpp', 'surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'photo', 'birth_block', 'birth_house', 'birth_flat', 'birth_place_latin', 'doc_seria', 'doc_number', 'date_begin_document', 'date_end_document', 'document_div_place', 'living_block', 'living_house', 'living_flat', 'living_foreign_place', 'arrival_date', 'work', 'certificate_seria', 'certificate_number', 'certificate_date', 'validity_date_certificate', 'living_uzb_place', 'creation_date', 'send_status', 'status_mvd', 'date_mvd', 'comment', 'print_status', 'annul_status', 'oplata', 'rasxod', 'nazorat', 'Fam', 'Ism', 'Sharif', 'Tug_Sana', 'surname_eng', 'name_eng'], 'safe'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'birth_street_id', 'document_type', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'living_foreign_country_id', 'arrival_reason_id', 'cause_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sert::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'division_id' => $this->division_id,
            'sex_id' => $this->sex_id,
            'nationality_id' => $this->nationality_id,
            'marital_status_id' => $this->marital_status_id,
            'birth_country_id' => $this->birth_country_id,
            'birth_region_id' => $this->birth_region_id,
            'birth_district_id' => $this->birth_district_id,
            'birth_place_id' => $this->birth_place_id,
            'birth_street_id' => $this->birth_street_id,
            'document_type' => $this->document_type,
            'date_begin_document' => $this->date_begin_document,
            'date_end_document' => $this->date_end_document,
            'document_div_id' => $this->document_div_id,
            'living_country_id' => $this->living_country_id,
            'living_region_id' => $this->living_region_id,
            'living_district_id' => $this->living_district_id,
            'living_place_id' => $this->living_place_id,
            'living_street_id' => $this->living_street_id,
            'living_foreign_country_id' => $this->living_foreign_country_id,
            'arrival_reason_id' => $this->arrival_reason_id,
            'arrival_date' => $this->arrival_date,
            'cause_id' => $this->cause_id,
            'certificate_date' => $this->certificate_date,
            'validity_date_certificate' => $this->validity_date_certificate,
            'creation_date' => $this->creation_date,
            'date_mvd' => $this->date_mvd,
            'Tug_Sana' => $this->Tug_Sana,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'id_mvd', $this->id_mvd])
            ->andFilterWhere(['like', 'pinpp', $this->pinpp])
            ->andFilterWhere(['like', 'surname_cyrillic', $this->surname_cyrillic])
            ->andFilterWhere(['like', 'name_cyrillic', $this->name_cyrillic])
            ->andFilterWhere(['like', 'patronym_cyrillic', $this->patronym_cyrillic])
            ->andFilterWhere(['like', 'surname_latin', $this->surname_latin])
            ->andFilterWhere(['like', 'name_latin', $this->name_latin])
            ->andFilterWhere(['like', 'patronym_latin', $this->patronym_latin])
            ->andFilterWhere(['like', 'birth_date', $this->birth_date])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'birth_block', $this->birth_block])
            ->andFilterWhere(['like', 'birth_house', $this->birth_house])
            ->andFilterWhere(['like', 'birth_flat', $this->birth_flat])
            ->andFilterWhere(['like', 'birth_place_latin', $this->birth_place_latin])
            ->andFilterWhere(['like', 'doc_seria', $this->doc_seria])
            ->andFilterWhere(['like', 'doc_number', $this->doc_number])
            ->andFilterWhere(['like', 'document_div_place', $this->document_div_place])
            ->andFilterWhere(['like', 'living_block', $this->living_block])
            ->andFilterWhere(['like', 'living_house', $this->living_house])
            ->andFilterWhere(['like', 'living_flat', $this->living_flat])
            ->andFilterWhere(['like', 'living_foreign_place', $this->living_foreign_place])
            ->andFilterWhere(['like', 'work', $this->work])
            ->andFilterWhere(['like', 'certificate_seria', $this->certificate_seria])
            ->andFilterWhere(['like', 'certificate_number', $this->certificate_number])
            ->andFilterWhere(['like', 'living_uzb_place', $this->living_uzb_place])
            ->andFilterWhere(['like', 'send_status', $this->send_status])
            ->andFilterWhere(['like', 'status_mvd', $this->status_mvd])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'print_status', $this->print_status])
            ->andFilterWhere(['like', 'annul_status', $this->annul_status])
            ->andFilterWhere(['like', 'oplata', $this->oplata])
            ->andFilterWhere(['like', 'rasxod', $this->rasxod])
            ->andFilterWhere(['like', 'nazorat', $this->nazorat])
            ->andFilterWhere(['like', 'Fam', $this->Fam])
            ->andFilterWhere(['like', 'Ism', $this->Ism])
            ->andFilterWhere(['like', 'Sharif', $this->Sharif])
            ->andFilterWhere(['like', 'surname_eng', $this->surname_eng])
            ->andFilterWhere(['like', 'name_eng', $this->name_eng]);

        return $dataProvider;
    }
}
