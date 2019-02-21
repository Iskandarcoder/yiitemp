<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Asosiy;

/**
 * AsosiySearch represents the model behind the search form about `backend\models\Asosiy`.
 */
class AsosiySearch extends Asosiy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'EMBASSY', 'SRC_REGNO', 'STATE_ID', 'POB', 'MARITAL', 'VISA_TYPE', 'OFFENCE_TY', 'XOLAT', 'KOD1', 'KOD3', 'YASH_VIL', 'YASH_TUM', 'REQ_TYPE', 'KOX'], 'integer'],
            [['REG_DATE', 'USERNAME', 'FULL_NAME', 'OTHER_NAME', 'DOB', 'TUG_JOYI', 'SEX', 'WORK_PLACE', 'ADDRESS', 'DATE_FROM', 'DATE_UPTO', 'FOREIGN_AD', 'REMARKS', 'Q_MALUMOT', 'FOTO', 'RASM', 'PSP_SERIAL', 'PSP_NUMBER', 'PSP_AUTHOR', 'PSP_ISSDAT', 'PSP_TERM', 'KOD2', 'NOM_SPRAV', 'TASDIQ_S', 'JAVOB', 'J_DATA', 'ISSUE_DAT', 'EXPIRE_DAT', 'HAMROH', 'SERT_RAQ', 'HAMROH2', 'HAMROH3', 'DOC1', 'DOC2', 'DOC3', 'KU_MVNOM', 'KU_MVDAT', 'MVKU_NOM', 'MVKU_DAT'], 'safe'],
            [['TULOV', 'FAKT_RAS'], 'number'],
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
        $query = Asosiy::find();

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
            'ID' => $this->ID,
            'REG_DATE' => $this->REG_DATE,
            'EMBASSY' => $this->EMBASSY,
            'SRC_REGNO' => $this->SRC_REGNO,
            'STATE_ID' => $this->STATE_ID,
            'DOB' => $this->DOB,
            'POB' => $this->POB,
            'MARITAL' => $this->MARITAL,
            'VISA_TYPE' => $this->VISA_TYPE,
            'DATE_FROM' => $this->DATE_FROM,
            'DATE_UPTO' => $this->DATE_UPTO,
            'OFFENCE_TY' => $this->OFFENCE_TY,
            'XOLAT' => $this->XOLAT,
            'PSP_ISSDAT' => $this->PSP_ISSDAT,
            'PSP_TERM' => $this->PSP_TERM,
            'TULOV' => $this->TULOV,
            'FAKT_RAS' => $this->FAKT_RAS,
            'KOD1' => $this->KOD1,
            'KOD3' => $this->KOD3,
            'YASH_VIL' => $this->YASH_VIL,
            'YASH_TUM' => $this->YASH_TUM,
            'REQ_TYPE' => $this->REQ_TYPE,
            'KOX' => $this->KOX,
            'J_DATA' => $this->J_DATA,
            'ISSUE_DAT' => $this->ISSUE_DAT,
            'EXPIRE_DAT' => $this->EXPIRE_DAT,
            'KU_MVDAT' => $this->KU_MVDAT,
            'MVKU_DAT' => $this->MVKU_DAT,
        ]);

        $query->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'FULL_NAME', $this->FULL_NAME])
            ->andFilterWhere(['like', 'OTHER_NAME', $this->OTHER_NAME])
            ->andFilterWhere(['like', 'TUG_JOYI', $this->TUG_JOYI])
            ->andFilterWhere(['like', 'SEX', $this->SEX])
            ->andFilterWhere(['like', 'WORK_PLACE', $this->WORK_PLACE])
            ->andFilterWhere(['like', 'ADDRESS', $this->ADDRESS])
            ->andFilterWhere(['like', 'FOREIGN_AD', $this->FOREIGN_AD])
            ->andFilterWhere(['like', 'REMARKS', $this->REMARKS])
            ->andFilterWhere(['like', 'Q_MALUMOT', $this->Q_MALUMOT])
            ->andFilterWhere(['like', 'FOTO', $this->FOTO])
            ->andFilterWhere(['like', 'RASM', $this->RASM])
            ->andFilterWhere(['like', 'PSP_SERIAL', $this->PSP_SERIAL])
            ->andFilterWhere(['like', 'PSP_NUMBER', $this->PSP_NUMBER])
            ->andFilterWhere(['like', 'PSP_AUTHOR', $this->PSP_AUTHOR])
            ->andFilterWhere(['like', 'KOD2', $this->KOD2])
            ->andFilterWhere(['like', 'NOM_SPRAV', $this->NOM_SPRAV])
            ->andFilterWhere(['like', 'TASDIQ_S', $this->TASDIQ_S])
            ->andFilterWhere(['like', 'JAVOB', $this->JAVOB])
            ->andFilterWhere(['like', 'HAMROH', $this->HAMROH])
            ->andFilterWhere(['like', 'SERT_RAQ', $this->SERT_RAQ])
            ->andFilterWhere(['like', 'HAMROH2', $this->HAMROH2])
            ->andFilterWhere(['like', 'HAMROH3', $this->HAMROH3])
            ->andFilterWhere(['like', 'DOC1', $this->DOC1])
            ->andFilterWhere(['like', 'DOC2', $this->DOC2])
            ->andFilterWhere(['like', 'DOC3', $this->DOC3])
            ->andFilterWhere(['like', 'KU_MVNOM', $this->KU_MVNOM])
            ->andFilterWhere(['like', 'MVKU_NOM', $this->MVKU_NOM]);

        return $dataProvider;
    }
}
