<?php
    use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
    $this->title = "水灯注册页面";
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
       	 <meta charset="<?= Yii::$app->charset ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title><?=Html::encode($this->title) ?></title>
         <?=Html::cssFile('@web/index/css/common.css') ?>
         <?=Html::cssFile('@web/index/css/register.css') ?>
                                                  
       	</head>
       	
<body class="contain">  
	 <div class="main">
	 	<div class="title">
	 	 	<h2>水灯社区欢迎你</h2>
	 	 </div>
	 	 
    	 <div class="main_regster">
    	 		<div class="new_style">
    	 			<h3><img src="index\images\pe_icon.jpg" alt="蜘蛛人图片"/> 创建属于你的账号</h3>    	 			                  
    	 		</div>
    	 		<p class="detail">请填写您的详细信息</p>
    	 		<?php $form = ActiveForm::begin()?>
    	 				<?=$form->field($model,'email',['template'=>'<input id="users-email" class="form-control email " placeholder="请输入电子邮箱" type="text" name="Users[email]"> <div>{error}</div>      	 				    
                ']) ?>
                  		<?=$form->field($model,'username',['template'=>'<input id="users-username" class="form-control username " placeholder="请输入账号" type="text" name="Users[username]"><div>{error}</div>
                        ']) ?>
                        
                  		<?=$form->field($model,'password',['template'=>'<input id="users-password" class="form-control password " placeholder="请输入密码" type="text" name="Users[password]"><div>{error}</div>
                        ']) ?>                        
                  		<?=$form->field($model,'confrimpassword',['template'=>'<input id="users-confrimpassword" class="form-control confrimpassword " placeholder="请确认密码" type="text" name="Users[confrimpassword]"><div>{error}</div>
                        ']) ?>
                        <div class="accept">
                        	<input type="checkbox" id="accept">我已阅读并接受<a href="#">水灯社区注册条款</a>	
                        </div>
                       <div class="button_style">
                  		<?= Html::resetButton('<img src="index\images\reset.png"> 重置')?>  <?= Html::submitInput('提交')?>
                  	  </div>                  
                <?php ActiveForm::end();?>
                <p class="back" >
                  	<a href="?r=user"><img src="index\images\arrow_l.png">返回到登陆</a>		
           	   </p>              
    	</div>        	 
   	 </div>	
   	 
</body>
</html>
						