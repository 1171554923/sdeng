<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Scores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput() ?>

    <?= $form->field($model, 'integral')->textInput() ?>

    <?= $form->field($model, 'isdefault')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
