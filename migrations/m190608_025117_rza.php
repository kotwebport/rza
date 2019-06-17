<?php

use yii\db\Migration;

/**
 * Class m190608_025117_rza
 */
class m190608_025117_rza extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		 $this->createTable('rza_section',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),            
        ]);
		
		$this->createTable('rza_test',[
            'id' => $this->primaryKey(),
			'section_id' => $this->integer(),
            'name' => $this->string(),  
		]);
		
		$this->createTable('rza_question', [
            'id' => $this->primaryKey(),
            'test_id' => $this->integer(),
            'question' => $this->text(),
            'answer' => $this->text(),
            'image' => $this->string(),            
        ]);	
		
		$this->addForeignKey('test-section-fk-rza', 'rza_test', 'section_id', 'rza_section', 'id', 'SET NULL', 'CASCADE');
		$this->addForeignKey('question-test-fk-rza', 'rza_question', 'test_id', 'rza_test', 'id', 'SET NULL', 'CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropForeignKey('question-test-fk-rza', 'rza_question');
		$this->dropForeignKey('test-section-fk-rza', 'rza_test');

        $this->dropTable('rza_section');
        $this->dropTable('rza_test');
        $this->dropTable('rza_question');

    }

}
