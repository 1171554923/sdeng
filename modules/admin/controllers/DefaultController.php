<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * 后台首页
 */
class DefaultController extends Controller
{
    
    public $layout = "admin";
    
    /**
     * Renders the index view for the module
     * @return string
     */    
    public function actionIndex()
    {       
        return $this->render('index');
    }
}
