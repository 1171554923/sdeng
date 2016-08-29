<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $captcha;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
             // username and password are both required
            ['username', 'required','message'=>'用户名不能为空'],
            ['username','string','max'=>40,'min'=>2,'tooLong'=>'用户名不能大于40位','tooShort'=>'用户名不能小于2位'],
            
            ['password', 'required','message'=>'用户密码不能为空'],
            ['password','string','max'=>40,'min'=>6,'tooLong'=>'密码不能大于40位','tooShort'=>'密码名不能小于6位'],
            
              ['captcha','captcha','message'=>'验证码错误','captchaAction'=>'admin/login/captcha'],
            ['captcha', 'string','min'=>4,'message'=>'验证码错误'],
            ['captcha', 'required','message'=>'验证码不能为空'],   
            
            
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            
        ];
    }

    /**
     * filed 的lable标签
     * {@inheritDoc}
     * @see \yii\base\Model::attributeLabels()
     */
    public function attributeLabels()
    {
        return [
            'captcha'=>'验证码 :'
        ];
    }
    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser(); 
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户密码或者账号错误!');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {        
            $admin = new Admin();
            $user = $admin->find()->where(['user_name'=>$this->username])->one();
            
            $user->user_name = $this->username;
            $user->password = md5($this->password);
            $user->last_login = time();
            $user->last_ip = $_SERVER['REMOTE_ADDR'];
            $user->count_login= $user->count_login += 1; 
                      
            if($user->save())
            {      
                return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
              /*   $session = Yii::$app->session;
                
                if(!$session->isActive)
                {                   
                    $session->open();
                    
                }
                             
                $session->set('user',$this->username);        */      
          }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
