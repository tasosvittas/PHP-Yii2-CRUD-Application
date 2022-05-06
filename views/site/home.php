<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')): ?>
        <?php echo yii::$app->session->getFlash('message','Success'); ?>
    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent">
        <h1 style="color: #337ab7;">Yii2 CRUD Application</h1>
    </div>
    <div class="row">
        <span style="margin-bottom: 20px;">
            <?= Html::a('Create New Product',['/site/create'], ['class'=>'btn btn-primary'])?>
        </span>
    </div>
    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($posts) > 0): ?>
                    <?php foreach ($posts as $post): ?>
                <tr class="table-active", style="margin: 2px">
                    <th scope="row"><?php echo $post -> id;?></th>
                    <td><?php echo $post -> title; ?></td>
                    <td><?php echo $post -> description; ?></td>
                    <td><?php echo $post -> category; ?></td>
                    <td>
                        <span style="margin: 15px;">
                            <?= Html::a('View', ['/site/view'], ['class'=>'btn btn-success'])?>
                            <?= Html::a('Update', ['/site/update'], ['class'=>'btn btn-success'])?>
                            <?= Html::a('Delete', ['/site/delete'], ['class'=>'btn btn-success'])?>
                        </span>
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Products Found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
