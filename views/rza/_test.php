<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="test-box-content">
	<h2><?=$testName?></h2>
<?php foreach ($questions as $question): ?>
<div class="test-content">	
	<p class="question"> <?= $question['question']?></p>
	<p class="answer">Ответ: <?= $question['answer']?></p>
	<?php if($question['image']): ?>
		<?php $url = '@web/images/rza/question/'.$question['image']?>
		<?= Html::img($url, ['alt' => 'image', 'width' => '100%', 'class' => 'img']) ?>
	<?php endIf; ?>
</div>
<?php endforeach; ?>
</div>	

