<?
namespace app\controllers;

use app\models\LoginForm;
use Yii;
/**
 * 前段登陆 注册 页面
 */
use yii\base\Controller;
use app\models\Users;

class UserController extends Controller
{
  /**
    * 登陆界面 
    */
    public function actionIndex()
    {
        $request = Yii::$app->request;
         $model = new LoginForm();
            if($model->load(Yii::$app->request->post()))
            {
               if($model->validate())
               {
                  
               } 
            }     
         
        return $this->renderPartial('index',['model'=>$model]);
    }
    
    /**
     * 注册页面
     */
    public function actionRegister()
    {      
        $model = new Users();
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
        
            }
        }
        
        return $this->renderPartial('register',['model'=>$model]);
    }
    
    /**
     * 找回密码
     */
    public function actionForget()
    {       
         return $this->renderPartial('forget');
    }
    
    
}
?>