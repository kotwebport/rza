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
		$this->section = RzaSection::findOne($sectionId);		
		$this->tests = RzaTest::find()->where(['section_id' => $sectionId])->asArray()->indexBy('id')->orderBy('id')->all();
				
	}	
}
	

?>