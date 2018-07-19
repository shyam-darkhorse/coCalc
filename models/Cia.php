<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cia".
 *
 * @property int $name
 * @property int $age
 */
class Cia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['name', 'age'], 'integer'],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'age' => 'Age',
        ];
    }
}
