<?php

namespace app\models\rza;

use Yii;

/**
 * This is the model class for table "rza_test".
 *
 * @property int $id
 * @property int $section_id
 * @property string $name
 *
 * @property RzaQuestion[] $rzaQuestions
 * @property RzaSection $section
 */
class RzaTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rza_test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => RzaSection::className(), 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_id' => 'Section ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzaQuestions()
    {
        return $this->hasMany(RzaQuestion::className(), ['test_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzaSection()
    {
        return $this->hasOne(RzaSection::className(), ['id' => 'section_id']);
    }
}
