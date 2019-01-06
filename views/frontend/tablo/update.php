<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tablo */

$this->title = 'Update Tablo: ' . $model->col1;
$this->params['breadcrumbs'][] = ['label' => 'Tablos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->col1, 'url' => ['view', 'id' => $model->col1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tablo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
