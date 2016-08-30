<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%arcrank}}".
 *
 * @property integer $id
 * @property integer $rank
 * @property string $membername
 * @property integer $adminrank
 * @property integer $money
 * @property integer $scores
 * @property string $purviews
 */
class Arcrank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%arcrank}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rank', 'membername'], 'required'],
            [['rank', 'adminrank', 'money', 'scores'], 'integer'],
            [['purviews'], 'string'],
            [['membername'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rank' => Yii::t('app', 'Rank'),
            'membername' => Yii::t('app', '管理员名字'),
            'adminrank' => Yii::t('app', '管理员等级'),
            'money' => Yii::t('app', 'Money'),
            'scores' => Yii::t('app', 'Scores'),
            'purviews' => Yii::t('app', 'Purviews'),
        ];
    }
}
