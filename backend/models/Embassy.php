<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "embassy".
 *
 * @property integer $id
 * @property string $name_cyrl
 * @property string $name_en
 * @property string $name_qrc
 * @property string $name_qrl
 * @property string $name_ru
 * @property string $name_uz
 * @property string $text_cyrl
 * @property string $text_en
 * @property string $text_qrc
 * @property string $text_qrl
 * @property string $text_ru
 * @property string $text_uz
 */
class Embassy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'embassy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_cyrl', 'text_en', 'text_qrc', 'text_qrl', 'text_ru', 'text_uz'], 'string'],
            [['name_cyrl', 'name_en', 'name_qrc', 'name_qrl', 'name_ru', 'name_uz'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_cyrl' => 'Name Cyrl',
            'name_en' => 'Name En',
            'name_qrc' => 'Name Qrc',
            'name_qrl' => 'Name Qrl',
            'name_ru' => 'Name Ru',
            'name_uz' => 'Name Uz',
            'text_cyrl' => 'Text Cyrl',
            'text_en' => 'Text En',
            'text_qrc' => 'Text Qrc',
            'text_qrl' => 'Text Qrl',
            'text_ru' => 'Text Ru',
            'text_uz' => 'Text Uz',
        ];
    }
}
