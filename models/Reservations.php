<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservations".
 *
 * @property int $id
 * @property string|null $heure
 * @property string|null $date
 * @property int $id_visiteur
 * @property int $id_ordinateur
 */
class Reservations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['heure', 'date'], 'safe'],
            [['id_visiteur', 'id_ordinateur'], 'required'],
            [['id_visiteur', 'id_ordinateur'], 'integer'],
            [['id_visiteur'], 'unique'],
            [['id_ordinateur'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heure' => 'Heure',
            'date' => 'Date',
            'id_visiteur' => 'Id Visiteur',
            'id_ordinateur' => 'Id Ordinateur',
        ];
    }
}
