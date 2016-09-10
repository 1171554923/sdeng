<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class User11 extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username; //后端用户名
    public $password; //后端密码登陆
    public $user; //前段用户名
    public $userpassword; //前段密码
    public $authKey;
    public $accessToken;
    public $sex;
    public $birthDay;
    public $reg_time;
    public $user_type;
    
    
    
 
    public static function tableName()
    {
        return '{{sd_admin}}';
       
    }
    
    
   
    /*
     * 获取后端数据
     */
    private static  function allUser()
    {
         $user = new Admin();
         $admin = $user->find()->asArray()->all();
         return $admin;
    }
    
    private  static function frontUser()
    {
        $user = new Users();        
        $admin = $user->find()->asArray()->all();
//         $admin = $user->findBySql('SELECT id,username,password,authKey,accessToken from sd_users')->asArray()->all();
        
        return $admin;
    }
    
    

    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $users = self::allUser();
        return isset($users[$id]) ? new static($users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $users = self::allUser();
        foreach ( $users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $users = self::allUser();
         foreach ($users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        
        return null;       
    }
    
    
    /*
     * 获取前端用户名
     */
    public static  function frontByName($username)
    {
        $users = self::frontUser();       
        foreach ($users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    { 
        return $this->password === md5($password);
    }
   
    
}
