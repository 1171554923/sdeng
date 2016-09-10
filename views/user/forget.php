<?php
    use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
    $this->title = "找回密码";
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
       	 <meta charset="<?= Yii::$app->charset ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel = "Shortcut Icon" href="index\images\web_icon.ico" />
         <title><?=Html::encode($this->title) ?></title>
         <?=Html::cssFile('@web/index/css/common.css') ?>
         <?=Html::cssFile('@web/index/css/register.css') ?>
                                                  
       	</head>
       	
<body class="contain">  
	 <div class="main">
	 	<div class="title">
	 	 	<h2>水灯 有趣有料的社区</h2>
	 	 </div>
	 	 
    	 <div class="main_regster">
    	 		<div class="Retrieve">
    	 			<h3>重新得到你的密码</h3>    	 			                  
    	 		</div>
    	 		
    	 		<p class="detail">请填写您的注册邮箱账号</p>
    	 		<div class="blank"></div>
    	 			<input id="users-email" class="form-control email " placeholder="请输入电子邮箱" type="text" name="Users[email]">
    	 			<button  class="send">发送</button>
    	 			
    	 			<div class="blank"></div> 
                <p class="back back_red" >
                  	<a href="/login.html"><img src="index\images\arrow_l.png">返回到登陆</a>		
           	   </p>              
    	</div>        	 
   	 </div>	
   	 
</body>
</html>
						