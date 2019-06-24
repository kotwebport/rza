<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<?php foreach ($questions as $question): ?>
	<h2>Вопрос: <?= $question['question']?></h2>
	<h2>Ответ: <?= $question['answer']?></h2>
	<?php if($question['image']): ?>
		<?php $url = '@web/images/rza/question/'.$question['image']?>
		<?= Html::img($url, ['alt' => 'image', 'width' => '50%', 'class' => 'img']) ?>
	<?php endIf; ?>
<?php endforeach; ?>

