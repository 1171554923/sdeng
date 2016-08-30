<?
namespace app\controllers;

/**
 * 前段登陆 注册 页面
 */
use yii\base\Controller;
class UserController extends Controller
{
  /**
    * 登陆界面 
    */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    
}
?>