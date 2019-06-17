<?php

namespace app\models\rza;

use Yii;

/**
 * This is the model class for table "rza_section".
 *
 * @property int $id
 * @property string $name
 *
 * @property RzaTest[] $rzaTests
 */
class RzaSection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rza_section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzaTests()
    {
        return $this->hasMany(RzaTest::className(), ['section_id' => 'id']);
    }
}
