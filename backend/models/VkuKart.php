<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vku_kart".
 *
 * @property integer $id
 * @property integer $elchihona_k
 * @property string $elchihona_tn_uz
 * @property string $elchihona_tn1_uz
 * @property string $elchihona_qn_uz
 * @property string $elchihona_tn_ru
 * @property string $elchihona_tn1_ru
 * @property string $elchihona_qn_ru
 * @property string $ish_vaqti_uz
 * @property string $ish_vaqti_c_uz
 * @property string $ish_vaqti_rus
 * @property string $ish_vaqti_c_ru
 * @property string $tel
 * @property string $email
 * @property string $adres
 */
class VkuKart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vku_kart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['elchihona_k'], 'integer'],
            [['elchihona_tn_uz', 'elchihona_tn1_uz', 'elchihona_tn_ru', 'elchihona_tn1_ru', 'ish_vaqti_uz', 'ish_vaqti_rus', 'email'], 'string', 'max' => 64],
            [['elchihona_qn_uz', 'elchihona_qn_ru', 'adres'], 'string', 'max' => 128],
            [['ish_vaqti_c_uz', 'ish_vaqti_c_ru', 'tel'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'elchihona_k' => 'Elchihona K',
            'elchihona_tn_uz' => 'Elchihona Tn Uz',
            'elchihona_tn1_uz' => 'Elchihona Tn1 Uz',
            'elchihona_qn_uz' => 'Elchihona Qn Uz',
            'elchihona_tn_ru' => 'Elchihona Tn Ru',
            'elchihona_tn1_ru' => 'Elchihona Tn1 Ru',
            'elchihona_qn_ru' => 'Elchihona Qn Ru',
            'ish_vaqti_uz' => 'Ish Vaqti Uz',
            'ish_vaqti_c_uz' => 'Ish Vaqti C Uz',
            'ish_vaqti_rus' => 'Ish Vaqti Rus',
            'ish_vaqti_c_ru' => 'Ish Vaqti C Ru',
            'tel' => 'Tel',
            'email' => 'Email',
            'adres' => 'Adres',
        ];
    }
}
