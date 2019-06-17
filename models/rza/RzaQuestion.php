<?php

namespace app\models\rza;

use Yii;

/**
 * This is the model class for table "rza_question".
 *
 * @property int $id
 * @property int $test_id
 * @property string $question
 * @property string $answer
 * @property string $image
 *
 * @property RzaTest $test
 */
class RzaQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rza_question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_id'], 'integer'],
            [['question', 'answer'], 'string'],
            [['image'], 'string', 'max' => 255],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => RzaTest::className(), 'targetAttribute' => ['test_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_id' => 'Test ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzaTest()
    {
        return $this->hasOne(RzaTest::className(), ['id' => 'test_id']);
    }
}
