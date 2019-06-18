<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<?php foreach ($questions as $question): ?>
    <?php $url = '@web/images/rza/question/'.$question['image']?>
    <h2>Вопрос: <?= $question['question']?></h2>
    <h2>Ответ: <?= $question['answer']?></h2>
    <?= Html::img($url, ['alt' => 'image', 'width' => '50%', 'class' => 'img']) ?>
<?php endforeach; ?>

