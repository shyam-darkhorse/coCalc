<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coattainment".
 *
 * @property string $CO_NO
 * @property double $AssignmentPresentation
 * @property double $Tutorial
 * @property double $CIA_Test
 * @property int $SEE
 */
class Coattainment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
	 
	public $CO1;
	public $CO2;
	public $CO3;
	public $CO4;
	public $CO5;
    public static function tableName()
    {
        return 'coattainment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CO_NO', 'AssignmentPresentation', 'Tutorial', 'CIA_Test', 'SEE'], 'required'],
            [['AssignmentPresentation', 'Tutorial', 'CIA_Test'], 'number','max'=>10,'min'=>0],
            [['SEE'], 'integer','max'=>100,'min'=>0],
            [['CO_NO'], 'string', 'max' => 3],
            [['CO_NO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CO_NO' => 'Co  No',
            'AssignmentPresentation' => 'Assignment Presentation',
            'Tutorial' => 'Tutorial',
            'CIA_Test' => 'Cia  Test',
            'SEE' => 'See',
        ];
    }
}
