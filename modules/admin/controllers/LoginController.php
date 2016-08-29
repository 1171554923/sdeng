<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\LoginForm;
use Yii;

/**
 * Default controller for the `admin` module
 */
class LoginController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
//     public $layout = 'main';
    
    /**
     * 登陆界面 
     * 
     */
    public function actionIndex()
    {                
            $request = Yii::$app->request;
            
            $model = new LoginForm();
            if($model->load(Yii::$app->request->post()))
            {
               if($model->validate())
               {
                   $model->login();
                   $this->redirect(['default/index']);
               }               
            }                                    
            return $this->render('index',['model'=>$model]);
    }
    
    public function actions()
    {
        return  [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor'=>0x000000,//背景颜色
                'maxLength'=>5,
                'minLength'=>4,
                'padding' => 5,//间距
                'height'=>40,//高度
                'width' => 130,  //宽度
                'foreColor'=>0xffffff,     //字体颜色
                'offset'=>10,        //设置字符偏移量 有效果
                //'controller'=>'login',        //拥有这个动作的controller
            ],
        ];
    }
}
