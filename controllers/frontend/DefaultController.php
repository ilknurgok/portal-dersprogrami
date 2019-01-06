<?php
namespace kouosl\dersprogrami\controllers\frontend;
//use yii\web\Controller;
use kouosl\dersprogrami\models\tablo;

/**
 * Default controller for the `dersprogrami` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
    
  public function actionTablo(){
    $tablo=Tablo::find()->all();
    foreach($tablo as $key){
        echo $key->col1;
    }
  }
	
	/* public function actionDeneme()
    {
        return $this->render('deneme');
    }*/

}
