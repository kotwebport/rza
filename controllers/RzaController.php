<?php

namespace app\controllers;

use yii\web\Controller;
use app\classes\rza\Menu;
use app\classes\rza\Test;

class RzaController extends Controller
{	
	//public $layout = 'rza/main';
	
    public function actionIndex()
    {
		$this->layout = 'rza/main-index';
        return $this->render('index');		
    }

	public function actionSection($sectionId = null)
	{	
		
		if (\Yii::$app->request->isAjax) {
            $ajax = \Yii::$app->request->get();
		}		
		$menu = new Menu;
		$menu->getMenu($ajax['id']);
					
		return $this->renderPartial('_section', [
			'section' => $menu->section,
			'tests' => $menu->tests,
		]); 
			
	}
	
	public function actionTest($testId = null)
	{
		if (\Yii::$app->request->isAjax) {
            $ajax = \Yii::$app->request->get();
        }
		$test = new Test;
		$test->getTest($ajax['id']);
		$test = $test->test;
		$questions = $test->questions;	
		
		
		return $this->renderPartial('_test', [
			'testName' => $test->name,
			'questions' => $questions,
		]);
	}

}
