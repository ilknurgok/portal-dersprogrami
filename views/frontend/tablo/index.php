<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use kouosl\dersprogrami\models\TabloSearch;
use kouosl\dersprogrami\models\Tablo;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TabloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tablos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tablo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'col1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    
    ?>
</div>
