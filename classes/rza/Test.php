<?php

namespace app\classes\rza;

use app\models\rza\RzaQuestion;

class Test
{
	public $questions;
	
	public function getTest($testId)
	{
		$this->questions = RzaQuestion::find()->where(['test_id' => $testId])->asArray()->all();
	}
	
}

?>