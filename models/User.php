<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;    
    public $authKey;
    public $accessToken;
    
    
    
 
    public static function tableName()
    {
        return '{{sd_admin}}';
    }
    
    
   
    
    private static  function allUser()
    {
         $user = new Admin();
         $admin = $user->find()->asArray()->all();
         return $admin;
    }

/*  private static $users =  [
       '100' => [
            'id' => '100',
            'username' => 'liaoziran',
            'password' => 'e10adc3949ba59abbe56e057f20f883e',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];  */
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
              
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
        
      /*   $user = User::find()
        ->where(['user_name' => $username])
        ->asArray()
        ->one();
    
        if($user){
            return new static($user);
        }
        
        return null; */
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
