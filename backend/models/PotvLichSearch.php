<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PotvLich;

/**
 * PotvLichSearch represents the model behind the search form about `backend\models\PotvLich`.
 */
class PotvLichSearch extends PotvLich
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id', 'p_dockind', 'p_division', 'p_birthcomp', 'p_sex', 'p_nation', 'p_countryb', 'p_regionb', 'p_districtb', 'p_doctypeb', 'p_country', 'p_region', 'p_district', 'p_place', 'p_street'], 'integer'],
            [['p_guid', 'p_citizen', 'p_pk', 'p_surnamec', 'p_namec', 'p_patronymc', 'p_surnameL', 'p_nameL', 'p_patronymL', 'p_birth', 'p_surnameold', 'p_nameold', 'p_patronymold', 'p_birthb', 'p_birthe', 'p_seryb', 'p_numberb', 'p_issuedbyb', 'p_datebegb', 'p_house', 'p_korpus', 'p_flat', 'p_address', 'p_comment', 'p_dateenter', 'p_MVD_guid', 'p_surnameeng', 'p_nameeng', 'p_birthplaceeng'], 'safe'],
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
        $query = PotvLich::find();

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
            'p_id' => $this->p_id,
            'p_dockind' => $this->p_dockind,
            'p_division' => $this->p_division,
            'p_birth' => $this->p_birth,
            'p_birthcomp' => $this->p_birthcomp,
            'p_sex' => $this->p_sex,
            'p_nation' => $this->p_nation,
            'p_countryb' => $this->p_countryb,
            'p_regionb' => $this->p_regionb,
            'p_districtb' => $this->p_districtb,
            'p_doctypeb' => $this->p_doctypeb,
            'p_datebegb' => $this->p_datebegb,
            'p_country' => $this->p_country,
            'p_region' => $this->p_region,
            'p_district' => $this->p_district,
            'p_place' => $this->p_place,
            'p_street' => $this->p_street,
            'p_dateenter' => $this->p_dateenter,
        ]);

        $query->andFilterWhere(['like', 'p_guid', $this->p_guid])
            ->andFilterWhere(['like', 'p_citizen', $this->p_citizen])
            ->andFilterWhere(['like', 'p_pk', $this->p_pk])
            ->andFilterWhere(['like', 'p_surnamec', $this->p_surnamec])
            ->andFilterWhere(['like', 'p_namec', $this->p_namec])
            ->andFilterWhere(['like', 'p_patronymc', $this->p_patronymc])
            ->andFilterWhere(['like', 'p_surnameL', $this->p_surnameL])
            ->andFilterWhere(['like', 'p_nameL', $this->p_nameL])
            ->andFilterWhere(['like', 'p_patronymL', $this->p_patronymL])
            ->andFilterWhere(['like', 'p_surnameold', $this->p_surnameold])
            ->andFilterWhere(['like', 'p_nameold', $this->p_nameold])
            ->andFilterWhere(['like', 'p_patronymold', $this->p_patronymold])
            ->andFilterWhere(['like', 'p_birthb', $this->p_birthb])
            ->andFilterWhere(['like', 'p_birthe', $this->p_birthe])
            ->andFilterWhere(['like', 'p_seryb', $this->p_seryb])
            ->andFilterWhere(['like', 'p_numberb', $this->p_numberb])
            ->andFilterWhere(['like', 'p_issuedbyb', $this->p_issuedbyb])
            ->andFilterWhere(['like', 'p_house', $this->p_house])
            ->andFilterWhere(['like', 'p_korpus', $this->p_korpus])
            ->andFilterWhere(['like', 'p_flat', $this->p_flat])
            ->andFilterWhere(['like', 'p_address', $this->p_address])
            ->andFilterWhere(['like', 'p_comment', $this->p_comment])
            ->andFilterWhere(['like', 'p_MVD_guid', $this->p_MVD_guid])
            ->andFilterWhere(['like', 'p_surnameeng', $this->p_surnameeng])
            ->andFilterWhere(['like', 'p_nameeng', $this->p_nameeng])
            ->andFilterWhere(['like', 'p_birthplaceeng', $this->p_birthplaceeng]);

        return $dataProvider;
    }
}
