<?php

namespace app\controllers;

use yii\web\Controller;
use app\classes\rza\Menu;
use app\classes\rza\Test;

class RzaController extends Controller
{	
	public $layout = 'rza/main';
	
    public function actionIndex()
    {
		$this->layout = 'rza/main-index';
        return $this->render('index');
    }

	public function actionSection($sectionId = null)
	{	
		$menu = new Menu;
		$menu->getMenu($sectionId);	
		
		return $this->render('section', [
			'menu' => $menu,
		]);		
	}
	
	public function actionTest($testId = null)
	{
		if (\Yii::$app->request->isAjax) {
            $testId = \Yii::$app->request->get();
        }
		$test = new Test;
		$test->getTest($testId);	
		
		
		return $this->renderPartial('_test', [
			'test' => $test, 
		]);
	}

}
