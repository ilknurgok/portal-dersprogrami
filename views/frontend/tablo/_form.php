<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tablo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tablo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'col1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
