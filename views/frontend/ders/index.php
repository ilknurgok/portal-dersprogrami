<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ders Programı';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ders-index">
 
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <p>
        <?= Html::a('Create Ders', ['create'], ['class' => 'btn btn-success']) ?>
        Tablo Adı:derspro
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       /*  'filterModel' => $searchModel,
       'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userID',
            'dersAdi',
            'sinif',

            ['class' => 'yii\grid\ActionColumn'],
        ],*/
    ]); ?>
</div>
