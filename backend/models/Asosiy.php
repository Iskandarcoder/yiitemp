<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "asosiy".
 *
 * @property integer $ID
 * @property string $REG_DATE
 * @property integer $EMBASSY
 * @property string $USERNAME
 * @property integer $SRC_REGNO
 * @property integer $STATE_ID
 * @property string $FULL_NAME
 * @property string $OTHER_NAME
 * @property string $DOB
 * @property string $TUG_JOYI
 * @property integer $POB
 * @property string $SEX
 * @property string $WORK_PLACE
 * @property string $ADDRESS
 * @property integer $MARITAL
 * @property integer $VISA_TYPE
 * @property string $DATE_FROM
 * @property string $DATE_UPTO
 * @property string $FOREIGN_AD
 * @property integer $OFFENCE_TY
 * @property string $REMARKS
 * @property string $Q_MALUMOT
 * @property string $FOTO
 * @property integer $XOLAT
 * @property string $RASM
 * @property string $PSP_SERIAL
 * @property string $PSP_NUMBER
 * @property string $PSP_AUTHOR
 * @property string $PSP_ISSDAT
 * @property string $PSP_TERM
 * @property double $TULOV
 * @property double $FAKT_RAS
 * @property integer $KOD1
 * @property string $KOD2
 * @property integer $KOD3
 * @property string $NOM_SPRAV
 * @property integer $YASH_VIL
 * @property integer $YASH_TUM
 * @property integer $REQ_TYPE
 * @property integer $KOX
 * @property string $TASDIQ_S
 * @property string $JAVOB
 * @property string $J_DATA
 * @property string $ISSUE_DAT
 * @property string $EXPIRE_DAT
 * @property string $HAMROH
 * @property string $SERT_RAQ
 * @property string $HAMROH2
 * @property string $HAMROH3
 * @property string $DOC1
 * @property string $DOC2
 * @property string $DOC3
 * @property string $KU_MVNOM
 * @property string $KU_MVDAT
 * @property string $MVKU_NOM
 * @property string $MVKU_DAT
 */
class Asosiy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asosiy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REG_DATE', 'DOB', 'DATE_FROM', 'DATE_UPTO', 'PSP_ISSDAT', 'PSP_TERM', 'J_DATA', 'ISSUE_DAT', 'EXPIRE_DAT', 'KU_MVDAT', 'MVKU_DAT'], 'safe'],
            [['EMBASSY', 'SRC_REGNO', 'STATE_ID', 'POB', 'MARITAL', 'VISA_TYPE', 'OFFENCE_TY', 'XOLAT', 'KOD1', 'KOD3', 'YASH_VIL', 'YASH_TUM', 'REQ_TYPE', 'KOX'], 'integer'],
            [['RASM', 'DOC1', 'DOC2', 'DOC3'], 'string'],
            [['TULOV', 'FAKT_RAS'], 'number'],
            [['USERNAME', 'NOM_SPRAV'], 'string', 'max' => 20],
            [['FULL_NAME'], 'string', 'max' => 80],
            [['OTHER_NAME'], 'string', 'max' => 30],
            [['TUG_JOYI', 'FOREIGN_AD', 'PSP_AUTHOR', 'HAMROH', 'HAMROH2', 'HAMROH3'], 'string', 'max' => 50],
            [['SEX', 'TASDIQ_S'], 'string', 'max' => 1],
            [['WORK_PLACE', 'ADDRESS'], 'string', 'max' => 100],
            [['REMARKS'], 'string', 'max' => 200],
            [['Q_MALUMOT', 'JAVOB'], 'string', 'max' => 250],
            [['FOTO'], 'string', 'max' => 25],
            [['PSP_SERIAL'], 'string', 'max' => 7],
            [['PSP_NUMBER', 'KOD2'], 'string', 'max' => 10],
            [['SERT_RAQ'], 'string', 'max' => 9],
            [['KU_MVNOM', 'MVKU_NOM'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'REG_DATE' => Yii::t('app', 'Reg  Date'),
            'EMBASSY' => Yii::t('app', 'Embassy'),
            'USERNAME' => Yii::t('app', 'Username'),
            'SRC_REGNO' => Yii::t('app', 'Src  Regno'),
            'STATE_ID' => Yii::t('app', 'State  ID'),
            'FULL_NAME' => Yii::t('app', 'Full  Name'),
            'OTHER_NAME' => Yii::t('app', 'Other  Name'),
            'DOB' => Yii::t('app', 'Dob'),
            'TUG_JOYI' => Yii::t('app', 'Tug  Joyi'),
            'POB' => Yii::t('app', 'Pob'),
            'SEX' => Yii::t('app', 'Sex'),
            'WORK_PLACE' => Yii::t('app', 'Work  Place'),
            'ADDRESS' => Yii::t('app', 'Address'),
            'MARITAL' => Yii::t('app', 'Marital'),
            'VISA_TYPE' => Yii::t('app', 'Visa  Type'),
            'DATE_FROM' => Yii::t('app', 'Date  From'),
            'DATE_UPTO' => Yii::t('app', 'Date  Upto'),
            'FOREIGN_AD' => Yii::t('app', 'Foreign  Ad'),
            'OFFENCE_TY' => Yii::t('app', 'Offence  Ty'),
            'REMARKS' => Yii::t('app', 'Remarks'),
            'Q_MALUMOT' => Yii::t('app', 'Q  Malumot'),
            'FOTO' => Yii::t('app', 'Foto'),
            'XOLAT' => Yii::t('app', 'Xolat'),
            'RASM' => Yii::t('app', 'Rasm'),
            'PSP_SERIAL' => Yii::t('app', 'Psp  Serial'),
            'PSP_NUMBER' => Yii::t('app', 'Psp  Number'),
            'PSP_AUTHOR' => Yii::t('app', 'Psp  Author'),
            'PSP_ISSDAT' => Yii::t('app', 'Psp  Issdat'),
            'PSP_TERM' => Yii::t('app', 'Psp  Term'),
            'TULOV' => Yii::t('app', 'Tulov'),
            'FAKT_RAS' => Yii::t('app', 'Fakt  Ras'),
            'KOD1' => Yii::t('app', 'Kod1'),
            'KOD2' => Yii::t('app', 'Kod2'),
            'KOD3' => Yii::t('app', 'Kod3'),
            'NOM_SPRAV' => Yii::t('app', 'Nom  Sprav'),
            'YASH_VIL' => Yii::t('app', 'Yash  Vil'),
            'YASH_TUM' => Yii::t('app', 'Yash  Tum'),
            'REQ_TYPE' => Yii::t('app', 'Req  Type'),
            'KOX' => Yii::t('app', 'Kox'),
            'TASDIQ_S' => Yii::t('app', 'Tasdiq  S'),
            'JAVOB' => Yii::t('app', 'Javob'),
            'J_DATA' => Yii::t('app', 'J  Data'),
            'ISSUE_DAT' => Yii::t('app', 'Issue  Dat'),
            'EXPIRE_DAT' => Yii::t('app', 'Expire  Dat'),
            'HAMROH' => Yii::t('app', 'Hamroh'),
            'SERT_RAQ' => Yii::t('app', 'Sert  Raq'),
            'HAMROH2' => Yii::t('app', 'Hamroh2'),
            'HAMROH3' => Yii::t('app', 'Hamroh3'),
            'DOC1' => Yii::t('app', 'Doc1'),
            'DOC2' => Yii::t('app', 'Doc2'),
            'DOC3' => Yii::t('app', 'Doc3'),
            'KU_MVNOM' => Yii::t('app', 'Ku  Mvnom'),
            'KU_MVDAT' => Yii::t('app', 'Ku  Mvdat'),
            'MVKU_NOM' => Yii::t('app', 'Mvku  Nom'),
            'MVKU_DAT' => Yii::t('app', 'Mvku  Dat'),
        ];
    }
}
