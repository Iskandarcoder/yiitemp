<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vkus;

/**
 * VkusSearch represents the model behind the search form about `backend\models\Vkus`.
 */
class VkusSearch extends Vkus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reg_num', 'pinpp', 'surname_cyrillic', 'name_cyrillic', 'patronym_cyrillic', 'surname_latin', 'name_latin', 'patronym_latin', 'birth_date', 'photo', 'birth_place_latin', 'doc_seria', 'doc_number', 'date_begin_document', 'date_endocument', 'document_div_place', 'living_block', 'living_house', 'living_flat', 'living_place_latin', 'living_foreign_place', 'begin_date', 'arrival_date', 'work_place', 'doc_adinfo', 'creation_date', 'foundation_cons_acc', 'living_uzb_place', 'senstatus', 'endate', 'status', 'adinfo', 'wed_name', 'education', 'education_date', 'which_school'], 'safe'],
            [['division_id', 'sex_id', 'nationality_id', 'marital_status_id', 'birth_country_id', 'birth_region_id', 'birth_district_id', 'birth_place_id', 'document_type_id', 'document_div_id', 'living_country_id', 'living_region_id', 'living_district_id', 'living_place_id', 'living_street_id', 'living_foreign_country_id', 'other_citizenship_id', 'reason_id', 'consular_account_type'], 'integer'],
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
        $query = Vkus::find();

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
            'date_endocument' => $this->date_endocument,
            'document_div_id' => $this->document_div_id,
            'living_country_id' => $this->living_country_id,
            'living_region_id' => $this->living_region_id,
            'living_district_id' => $this->living_district_id,
            'living_place_id' => $this->living_place_id,
            'living_street_id' => $this->living_street_id,
            'living_foreign_country_id' => $this->living_foreign_country_id,
            'begin_date' => $this->begin_date,
            'arrival_date' => $this->arrival_date,
            'other_citizenship_id' => $this->other_citizenship_id,
            'creation_date' => $this->creation_date,
            'endate' => $this->endate,
            'reason_id' => $this->reason_id,
            'consular_account_type' => $this->consular_account_type,
            'education_date' => $this->education_date,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'reg_num', $this->reg_num])
            ->andFilterWhere(['like', 'pinpp', $this->pinpp])
            ->andFilterWhere(['like', 'surname_cyrillic', $this->surname_cyrillic])
            ->andFilterWhere(['like', 'name_cyrillic', $this->name_cyrillic])
            ->andFilterWhere(['like', 'patronym_cyrillic', $this->patronym_cyrillic])
            ->andFilterWhere(['like', 'surname_latin', $this->surname_latin])
            ->andFilterWhere(['like', 'name_latin', $this->name_latin])
            ->andFilterWhere(['like', 'patronym_latin', $this->patronym_latin])
            ->andFilterWhere(['like', 'birth_date', $this->birth_date])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'birth_place_latin', $this->birth_place_latin])
            ->andFilterWhere(['like', 'doc_seria', $this->doc_seria])
            ->andFilterWhere(['like', 'doc_number', $this->doc_number])
            ->andFilterWhere(['like', 'document_div_place', $this->document_div_place])
            ->andFilterWhere(['like', 'living_block', $this->living_block])
            ->andFilterWhere(['like', 'living_house', $this->living_house])
            ->andFilterWhere(['like', 'living_flat', $this->living_flat])
            ->andFilterWhere(['like', 'living_place_latin', $this->living_place_latin])
            ->andFilterWhere(['like', 'living_foreign_place', $this->living_foreign_place])
            ->andFilterWhere(['like', 'work_place', $this->work_place])
            ->andFilterWhere(['like', 'doc_adinfo', $this->doc_adinfo])
            ->andFilterWhere(['like', 'foundation_cons_acc', $this->foundation_cons_acc])
            ->andFilterWhere(['like', 'living_uzb_place', $this->living_uzb_place])
            ->andFilterWhere(['like', 'senstatus', $this->senstatus])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'adinfo', $this->adinfo])
            ->andFilterWhere(['like', 'wed_name', $this->wed_name])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'which_school', $this->which_school]);

        return $dataProvider;
    }
}
