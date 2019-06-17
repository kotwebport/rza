<?php

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
	
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
			
        ],
    ]);
    ?>
	
	<div class = "menu_development">
		<?php foreach($menu->tests as $test): ?>
    	<a class = "js-test navbar-right" href="<?= Url::toRoute(['rza/test', 'testId' => $test['id']]); ?>" data-url="rza/test" data-id="<?= $test['id'] ?>"><?=$test['name'] ?></a>
    	<?php endForeach; ?>
	</div>
    <?php
    NavBar::end();
    ?>  
	<br />
	<br />
	<br />
	<br />
    <h1><?= $menu->section->name ?></h1>
	<div class="js_content">
			
    </div>
   