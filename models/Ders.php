<?php

namespace kouosl\dersprogrami\models;

use Yii;

/**
 * This is the model class for table "derspro".
 *
 * @property int $userID
 * @property string $dersAdi
 * @property string $sinif
 */
class Ders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'derspro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userID', 'dersAdi', 'sinif'], 'required'],
            [['userID'], 'integer'],
            [['dersAdi'], 'string', 'max' => 20],
            [['sinif'], 'string', 'max' => 10],
            [['userID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userID' => 'User ID',
            'dersAdi' => 'Ders Adi',
            'sinif' => 'Sinif',
        ];
    }
}
