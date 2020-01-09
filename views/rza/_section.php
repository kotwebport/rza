<?php

use yii\helpers\Url;
use yii\bootstrap\NavBar;
?>
<div class="">
    <ul class="test-box nav flex-column">      
    <?php foreach ($tests as $test): ?>
        <li><a class="nav-item js-getAjax" href="<?= Url::toRoute(['rza/test', 'testId' =>$test['id']]); ?>"
			   data-url="rza/test" data-id="<?= $test['id'] ?>"><?= $test['name'] ?></a></li>
    <?php endForeach; ?>
    </ul>
</div>
<div class="js-test">

</div>
   