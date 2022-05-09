<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap4\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <h1>VIEW PRODUCT</h1>
    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->id; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->title; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->description; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->category; ?>
            </li>
        </ul>
        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary"> Go Back</a>
    </div>
</div>
