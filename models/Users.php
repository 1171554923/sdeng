<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $eamil
 * @property string $mobile_phone
 * @property integer $sex
 * @property string $birthDay
 * @property integer $last_login
 * @property string $last_ip
 * @property integer $reg_time
 * @property integer $user_type
 */
class Users extends \yii\db\ActiveRecord
{
    public $confrimpassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }
    
   /*  private static  function allUser()
    {
        $user = new Admin();
        $admin = $user->find('username')->asArray()->all();
        return $admin;
    } */
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id' ,'username','email','confrimpassword', 'password', 'sex'], 'required'],
            ['email','unique','message'=>'邮箱已被注册'],  
            ['username','unique','message'=>'用户名已被使用'],
            ['username','string','max'=>40,'min'=>2,'tooLong'=>'用户名不能大于40位','tooShort'=>'用户名不能小于2位'],
            ['password','string','max'=>40,'min'=>6,'tooLong'=>'密码不能大于40位','tooShort'=>'密码名不能小于6位'],
            [['id', 'sex', 'last_login', 'reg_time', 'user_type'], 'integer'],
            [['birthDay'], 'safe'],
            ['email','email','message'=>'电子邮箱格式不正确'],
            [['username', 'password', 'email'], 'string', 'max' => 40],
            [['mobile_phone', 'last_ip'], 'string', 'max' => 15],             
        ];
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

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', '用户名'),
            'password' => Yii::t('app', '用户密码'),
            'confrimpassword'=>yii::t('app', '确认密码'),
            'email' => Yii::t('app', '电子邮箱'),           
            'mobile_phone' => Yii::t('app', 'Mobile Phone'),
            'sex' => Yii::t('app', '性别'),
            'birthDay' => Yii::t('app', 'Birth Day'),
            'last_login' => Yii::t('app', '最后登陆时间'),
            'last_ip' => Yii::t('app', '//最后等录ip'),
            'reg_time' => Yii::t('app', 'Reg Time'),
            'user_type' => Yii::t('app', '//会员等级'),
        ];
    }
}
