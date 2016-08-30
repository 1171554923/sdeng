<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $add_time
 * @property integer $last_login
 * @property string $last_ip
 * @property integer $manage_level
 * @property integer $count_login
 * 
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{sd_admin}}';
    }
    

    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//             ['username','unique','message'=>'用户名重复'],
            ['username', 'required','message'=>'用户名不能为空'],
            ['username','string','max'=>40,'min'=>2,'tooLong'=>'用户名不能大于40位','tooShort'=>'用户名不能小于2位'],            
           
            
            ['password', 'required','message'=>'用户密码不能为空'],
            ['password','string','max'=>40,'min'=>6,'tooLong'=>'密码不能大于40位','tooShort'=>'密码名不能小于6位'],
            [['username', 'password'], 'required'],
            ['email','email'],
            [['add_time', 'last_login', 'manage_level', 'count_login'], 'integer'],
            [['username', 'email'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 40],
            [['last_ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '后台管理员id'),
            'username' => Yii::t('app', '管理员账号'),
            'email' => Yii::t('app', '管理员邮箱'),
            'password' => Yii::t('app', '管理员密码'),
            'add_time' => Yii::t('app', '管理员最后登陆的时间'),
            'last_login' => Yii::t('app', 'Last Login'),
            'last_ip' => Yii::t('app', '最后登陆ip地址'),
            'manage_level' => Yii::t('app', '管理员等级'),
            'count_login' => Yii::t('app', '登陆次数'),
            'authKey' => Yii::t('app', '自动识别key'),
            'accessToken' => Yii::t('app', '进入标示'),
        ];
    }
    
     
   
}
