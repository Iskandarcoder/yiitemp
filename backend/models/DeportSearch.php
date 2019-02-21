<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Deport;

/**
 * DeportSearch represents the model behind the search form about `backend\models\Deport`.
 */
class DeportSearch extends Deport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pinpp', 'surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'birth_place_latin', 'doc_seria', 'doc_number', 'date_begin_document', 'date_end_document', 'document_div_place', 'living_block', 'living_house', 'living_flat', 'living_foreign_place', 'offense_article', 'deport_date', 'deport_route', 'creation_date', 'living_uzb_place', 'add_info', 'Send_status'], 'safe'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'arrival_country_id', 'offense_id', 'penalty_id'], 'integer'],
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
        $query = Deport::find();

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
            'document_type_id' => $this->document_type_id,
            'date_begin_document' => $this->date_begin_document,
            'date_end_document' => $this->date_end_document,
            'document_div_id' => $this->document_div_id,
            'living_country_id' => $this->living_country_id,
            'living_region_id' => $this->living_region_id,
            'living_district_id' => $this->living_district_id,
            'living_place_id' => $this->living_place_id,
            'living_street_id' => $this->living_street_id,
            'arrival_country_id' => $this->arrival_country_id,
            'offense_id' => $this->offense_id,
            'penalty_id' => $this->penalty_id,
            'deport_date' => $this->deport_date,
            'creation_date' => $this->creation_date,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'pinpp', $this->pinpp])
            ->andFilterWhere(['like', 'surname_cyrillic', $this->surname_cyrillic])
            ->andFilterWhere(['like', 'name_cyrillic', $this->name_cyrillic])
            ->andFilterWhere(['like', 'patronym_cyrillic', $this->patronym_cyrillic])
            ->andFilterWhere(['like', 'surname_latin', $this->surname_latin])
            ->andFilterWhere(['like', 'name_latin', $this->name_latin])
            ->andFilterWhere(['like', 'patronym_latin', $this->patronym_latin])
            ->andFilterWhere(['like', 'birth_date', $this->birth_date])
            ->andFilterWhere(['like', 'birth_place_latin', $this->birth_place_latin])
            ->andFilterWhere(['like', 'doc_seria', $this->doc_seria])
            ->andFilterWhere(['like', 'doc_number', $this->doc_number])
            ->andFilterWhere(['like', 'document_div_place', $this->document_div_place])
            ->andFilterWhere(['like', 'living_block', $this->living_block])
            ->andFilterWhere(['like', 'living_house', $this->living_house])
            ->andFilterWhere(['like', 'living_flat', $this->living_flat])
            ->andFilterWhere(['like', 'living_foreign_place', $this->living_foreign_place])
            ->andFilterWhere(['like', 'offense_article', $this->offense_article])
            ->andFilterWhere(['like', 'deport_route', $this->deport_route])
            ->andFilterWhere(['like', 'living_uzb_place', $this->living_uzb_place])
            ->andFilterWhere(['like', 'add_info', $this->add_info])
            ->andFilterWhere(['like', 'Send_status', $this->Send_status]);

        return $dataProvider;
    }
}
