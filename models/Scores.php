<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%scores}}".
 *
 * @property integer $id
 * @property string $titles
 * @property integer $icon
 * @property integer $integral
 * @property integer $isdefault
 */
class Scores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%scores}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'integral', 'isdefault'], 'integer'],
            [['integral'], 'required'],
            [['titles'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'titles' => Yii::t('app', '标题名称'),
            'icon' => Yii::t('app', 'Icon'),
            'integral' => Yii::t('app', 'Integral'),
            'isdefault' => Yii::t('app', 'Isdefault'),
        ];
    }
}
