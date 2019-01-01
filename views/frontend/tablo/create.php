<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tablo */

$this->title = 'Create Tablo ';
$this->params['breadcrumbs'][] = ['label' => 'Tablos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
