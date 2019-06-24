<?php

use yii\helpers\Url;
use yii\bootstrap\NavBar;

?>
<a href="<?= Url::toRoute(['rza/index'])?>">К разделам <a/>
<div class="">
    <?php foreach ($menu->tests as $test): ?>
        <li><a class="js-test" href="<?= Url::toRoute(['rza/test', 'testId' => $test['id']]); ?>"
			   data-url="rza/test" data-id="<?= $test['id'] ?>"><?= $test['name'] ?></a></li>
    <?php endForeach; ?>
</div>
<h1><?= $menu->section->name ?></h1>
<div class="js_content">

</div>
   