<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\rza\ltAppAsset;
use app\assets\rza\AppAsset;
use app\models\rza\RzaSection;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="section">
	
 	<?php $sections = RzaSection::find()->asArray()->indexBy('id')->orderBy('id')->all();	?>	
	<ul class="section-box nav justify-content-center nav-pills">
		<?php foreach($sections as $section): ?>
   			<li class="nav-item"><a class = "nav-link js-getAjax" href="<?= Url::toRoute(['rza/section', 'sectionId' => $section['id']]); ?>" data-url="rza/section" data-id="<?= $section['id']; ?>"><?=$section['name'] ?></a></li>
   		<?php endForeach; ?>
	</ul>		
</div>
<div class="container">
        <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
