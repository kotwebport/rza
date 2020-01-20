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
                'section' => 'Теория',
                'tests' => [
                    'Электротехника',
					'Аварийные и ненормальные режимы',
                    'Базовые понятия в релейной защите',
                    'Требования НТД к оборудованию ПС',
                    'Требования НТД к РЗА',
                ],
            ],
            [
                'section' => 'Оборудование',
                'tests' => [
                    'Первичное оборудование ПС',
					'Измерительные трансформаторы',
					'Автоматы и предохранители',
                    'Реле',
					'Оперативный ток',
                    'Схемы РЗА',
                ],
            ],
            [
                'section' => 'Практика',
                'tests' => [
                    'Правила ТО РЗА',
                    'Испытания вторичных цепей и оборудования РЗ',
                    'Снятие электрических характеристик',
					'Проверка сборки вторичных цепей',
					'Вопросы по ГПС-370'
                ],

            ],
			[
                'section' => 'ЦУС',
                'tests' => [	
					'Список тем на допуск ТО средней сложности РЗА'
                ],

            ],
            [
                'section' => 'Охрана труда',
                'tests' => [

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
