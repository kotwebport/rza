<?php

use yii\db\Migration;
use app\models\rza\RzaSection;

/**
 * Class m190613_092051_rza
 */
class m190613_092051_rza extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        /**
         * array of sections and tests
         */
        $menu = [
           [
                'section' => 'ЦУС',
                'tests' => [	
					'Теория РЗА',
					'Оборудование РЗА',
					'Схемы РЗА',
					'Проверки и испытания РЗА'
                ],

            ],
        ];

        /**
         * the mechanism of formation of the static part of the database
         */
        foreach ($menu as $menu_element) {
            $this->insert('rza_section', [
                'name' => $menu_element['section'],
            ]);
        }

        foreach ($menu as $menu_element) {
            $section = RzaSection::find()->where(['name' => $menu_element['section']])->one();
            foreach ($menu_element['tests'] as $test){
                $this->insert('rza_test', [
                    'section_id' => $section->id,
                    'name' => $test,
                ]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('rza_section');
    }

}
