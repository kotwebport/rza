<?php

use yii\helpers\Url;
use yii\bootstrap\NavBar;

?>
<a href="<?= Url::toRoute(['rza/index'])?>">К разделам <a/>
<div class="">
    <?php foreach ($tests as $test): ?>
        <li><a class="js-getAjax" href="<?= Url::toRoute(['rza/test', 'testId' =>3]); ?>"
			   data-url="rza/test" data-id="<?= $test['id'] ?>"><?= $test['name'] ?></a></li>
    <?php endForeach; ?>
</div>
<h1><?= $section['name'] ?></h1>
<div class="js-test">

</div>
   