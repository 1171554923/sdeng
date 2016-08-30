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
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password', 'sex'], 'required'],
            [['id', 'sex', 'last_login', 'reg_time', 'user_type'], 'integer'],
            [['birthDay'], 'safe'],
            [['username', 'password', 'eamil'], 'string', 'max' => 40],
            [['mobile_phone', 'last_ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', '用户名'),
            'password' => Yii::t('app', 'Password'),
            'eamil' => Yii::t('app', 'Eamil'),
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
