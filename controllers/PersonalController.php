<?php
namespace app\controllers;
/**
 * 个人中心类
 */    

use yii\base\Controller;
class PersonalController extends Controller
{
   public $layout ='front.layout.php';
    /**
     * 
     */
    public function actionIndex()
    {
            
        return $this->render('index');
    }
}
?>