<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Admin;
use app\models\AdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminController implements the CRUD actions for Admin model.
 */
class AdminController extends Controller
{
    public $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Admin models.
     * @return mixed
     */
    public function actionIndex()
    {
        
       
         $searchModel = new AdminSearch();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);      
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]); 
       
    }

    /**
     * Displays a single Admin model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Admin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Admin();
        
       if(Yii::$app->request->post())
       {          
           $username = $_POST['Admin']['username'];
           $model->username = $username;
           $model->password = md5($_POST['Admin']['password']);
           $model->email = $_POST['Admin']['email'];
           $model->manage_level = $_POST['Admin']['manage_level'];
           $model->authKey = 'test'.$username.'key';                 
           $model->accessToken = $username.'-tokey';
           if($model->save()){
               return $this->redirect(['view', 'id' => $model->id]);
           }         
       }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }       
    }

    /**
     * Updates an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);       
        if(Yii::$app->request->post())
        {
            $model = new Admin();
            $user =  $model->find()->where(['id'=>$id])->one();
            $username = $_POST['Admin']['username'];
            $user->username = $username;
            if($_POST['Admin']['password'] === $user['password'] )
            {              
               $user->password = $user['password'];
            }
            else 
            {              
                $user->password = md5($_POST['Admin']['password']);
            }                          
            $user->email = $_POST['Admin']['email'];
            $user->manage_level = $_POST['Admin']['manage_level'];
            if($user->save()){
                return $this->redirect(['view', 'id' => $user->id]);
            }   
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Admin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

         $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }   

    /**
     * Finds the Admin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Admin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}