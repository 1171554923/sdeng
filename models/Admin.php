<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property integer $use_id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property integer $add_time
 * @property integer $last_login
 * @property string $last_ip
 * @property integer $manage_level
 * @property integer $count_login
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
            [['user_name', 'password'], 'required'],
            ['email','email'],
            [['add_time', 'last_login', 'manage_level', 'count_login'], 'integer'],
            [['user_name', 'email'], 'string', 'max' => 60],
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
            'use_id' => Yii::t('app', '后台管理员id'),
            'user_name' => Yii::t('app', '管理员账号'),
            'email' => Yii::t('app', '管理员邮箱'),
            'password' => Yii::t('app', '管理员密码'),
            'add_time' => Yii::t('app', '管理员最后登陆的时间'),
            'last_login' => Yii::t('app', 'Last Login'),
            'last_ip' => Yii::t('app', '最后登陆ip地址'),
            'manage_level' => Yii::t('app', '管理员等级'),
            'count_login' => Yii::t('app', '登陆次数'),
        ];
    }
    
     
   
}
