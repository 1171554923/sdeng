<?
namespace app\controllers;

use yii\web\Controller;
use app\models\LoginForm;
use Yii;

/**
 * 前段登陆 注册 页面
 */

use app\models\Users;
use yii\base\Behavior;



class UserController extends Controller
{
   
    
   public $layout ='login.layout.php';
   
  /**
    * 登陆界面 
    */
    public function actionIndex()
    {       
        $session = Yii::$app->session;
        $session->open();   
        
        
        if(empty($session->get('loginNum')))
        {            
            $session->set('loginNum','0');
        }
               
         
      
        $model = new LoginForm();           
        if($model->load(Yii::$app->request->post()))            
        {                   
           $session->set('loginNum',$session->get('loginNum') + 1);             
           if($model->validate() && $model->frontLogin())
           {                   
              
               $session->set('loginNum','0');
               return $this->redirect(['/personal/index']);             
             
           }
        }   
        
        return $this->render('index',['model'=>$model,'loginNum'=>$session->get('loginNum')]); 
    }
    
    /**
     * 注册页面
     */
    public function actionRegister()
    {      
        $model = new Users();            
        if($model->load(Yii::$app->request->post()))
        {    
            if($model->validate() && $model->save()){                 
               return $this->redirect(['/login']);
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
    
    
    public function actionLogout()
    {
               
        Yii::$app->user->logout(false);
        return $this->redirect(['/index']); 
    }
    
}
?>