<?php

// comment out the following two lines when deployed to production
//是否开启调试模式
defined('YII_DEBUG') or define('YII_DEBUG', true);
//YII_ENV 默认值为 'prod'，表示应用运行在线上产品环境
defined('YII_ENV') or define('YII_ENV', 'dev');

//注册一个composer加载器
require(__DIR__ . '/../vendor/autoload.php');
//加载Yii类
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');


//加载应用配置
$config = require(__DIR__ . '/../config/web.php');

//运行实例
(new yii\web\Application($config))->run();
