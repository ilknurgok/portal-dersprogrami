<?php
namespace kouosl\dersprogrami\controllers\backend;


/**
 * Default controller for the `dersprogrami` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
	
}
