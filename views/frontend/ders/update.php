<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ders */

$this->title = 'Update Ders: ' . $model->userID;
$this->params['breadcrumbs'][] = ['label' => 'Ders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userID, 'url' => ['view', 'id' => $model->userID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
