<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<h3 class="test-name"><?= $testName ?></h3>
<div class="test-box-content">
    <?php foreach ($questions as $question): ?>
        <div class="test-content">
            <p class="question"> <?= $question['question'] ?></p>
            <p class="answer">Ответ: <?= $question['answer'] ?></p>
            <?php if ($question['image']): ?>
                <?php $url = '@web/images/rza/question/' . $question['image'] ?>
                <?= Html::img($url, ['alt' => 'image', 'width' => '100%', 'class' => 'img']) ?>
            <?php endIf; ?>
        </div>
    <?php endforeach; ?>
</div>	

