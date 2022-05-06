<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap4\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <h1>CREATE NEW PRODUCT</h1>
    <div class="body-content">
        <?php $form= ActiveForm::begin()?>
        <div class="row">
            <div class="form-group">
                <div class="col-xl-12">
                    <?= $form->field($post, 'title')->textInput(['style'=>'width:800px']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-xl-12">
                    <?= $form->field($post, 'description')->textarea(['rows'=>'6','style'=>'width:800px']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-xl-12">
                    <?php $items = ['Computer'=>'Computer','Accessories'=>'Accessories']; ?>
                    <?= $form->field($post, 'category')->dropDownList($items, ['prompt'=>'Select','style'=>'width:800px']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-xl-12", style="margin-left: 0px",>
                    <?= Html::submitButton('Create Product', ['class'=>'btn btn-primary']); ?>
                    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary"> Go Back</a>
                </div>
            </div>
        </div>
        <?php ActiveForm::end()?>
<!--        --><?php //$form = ActiveForm::begin(['layout'=>'horizontal']) ?>
<!---->
<!--        --><?php //ActiveForm::end()?>

    </div>
</div>
