<?php
namespace app\classes\rza;

use app\models\rza\RzaSection;
use app\models\rza\RzaTest;

class Menu
{
	public $section;
	public $tests;
	
	public function getMenu($sectionId)
	{
		$this->section = RzaSection::find()->where(['id' => $sectionId])->asArray()->one();
		$this->tests = RzaTest::find()->where(['section_id' => $sectionId])->asArray()->indexBy('id')->orderBy('id')->all();
				
	}	
}
	

?>