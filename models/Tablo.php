<?php


namespace kouosl\dersprogrami\models;
use Yii;

/**
 * This is the model class for table "tablo".
 *
 * @property int $col1
 */
class Tablo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tablo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['col1'], 'required'],
            [['col1'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'col1' => 'Col1',
        ];
    }
}
