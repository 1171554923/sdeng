<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="index-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password') ?>        
       <?= $form->field($model,'captcha')->widget(yii\captcha\Captcha::className(),
												    [
												    'captchaAction'=>'index/captcha',
												    'imageOptions'=>['alt'=>'点击换图',
												     'title'=>'点击换图', '
												      style'=>'cursor:pointer'],
												      'template'=>"<div class=\"row\"><div class=\"col-xs-6\">{input}</div><div class=\"col-xs-6\">

{image}</div></div>",												        
												        ]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- index-index -->
