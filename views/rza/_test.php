<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<?php foreach ($questions as $question): ?>
<div class="test-box">
	<p class="question">Вопрос: <?= $question['question']?></p>
	<p class="answer">Ответ: <?= $question['answer']?></p>
	<?php if($question['image']): ?>
		<?php $url = '@web/images/rza/question/'.$question['image']?>
		<?= Html::img($url, ['alt' => 'image', 'width' => '100%', 'class' => 'img']) ?>
	<?php endIf; ?>
</div>
<?php endforeach; ?>

