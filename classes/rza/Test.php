<?php

namespace app\classes\rza;

use app\models\rza\RzaQuestion;
use app\models\rza\RzaTest;

class Test
{
	public $questions;
	public $testActive;
	
	public function getTest($testId)
	{
		$this->testActive = RzaTest::find()->where(['id'=> $testId])->one();
		$this->questions = RzaQuestion::find()->where(['test_id' => $testId])->asArray()->all();
	}
	
}

?>