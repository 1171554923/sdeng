<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='登陆';
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
        <meta charset="<?= Yii::$app->charset ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel = "Shortcut Icon" href="index\images\web_icon.ico" />
         <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>
			<?=Html::cssFile('@web/index/css/common.css') ?>                       
            <?=Html::cssFile('@web/index/css/login.css') ?>
            <?=Html::jsFile('@web/index/js/jquery-1.7.2.min.js')?>
        </head>                
            <body>
            <div class="back"><a href="?r=index"><img src="index/images/arrow_ll.png" width=12%/> 返回</a></div>                                
            <div class="logo_box">
            	<h3>水灯社区欢迎你</h3>
            	<?php  $form = ActiveForm::begin()?>
            		<div class="input_outer">
            			<span class="u_user"></span><?= $form->field($model, 'user',
            			    ['template'=>"<input id=\"loginform-user\" name=\"LoginForm[user]\"
            			        class=\"text\" placeholder=\"输入ID或用户名登录\"
            			        style=\"color: #FFFFFF !
                        important\" type=\"text\"><div class=\"error\">{error}</div>"])?>
											
            		</div>
            		
				<div class="input_outer">            			
	<span class="u_user"></span><?= $form->field($model, 'userpassword',
            			    ['template'=>"<input id=\"loginform-userpassword\" name=\"LoginForm[userpassword]\"
            			        class=\"text\" placeholder=\"输入用户密码\"
            			        style=\"color: #FFFFFF !
                        important\" type=\"password\"><div class=\"error\">{error}</div>"])?>
            		</div>								
					
					<?php  if($loginNum >= 3): ?>
					 <?= $form->field($model,'captcha')->widget(yii\captcha\Captcha::className(),										
	    [											
	    'captchaAction'=>'admin/login/captcha',											
	    'imageOptions'=>['alt'=>'点击换图',											
	    'title'=>'点击换图',
	    'style'=>'cursor:pointer'],											
	    'template'=>"<div class=\"row\"><div class=\"col-xs-6\">{input}</div><div class=\"col-xs-6\">
{image}</div></div>",			        						
	        ])->label('') ?>											
				 <?php endif; ?>										
            		<div class="mb2">
            		<?= Html::submitButton('登陆',['class'=>'submit'])?>            		 
            		 </div>
            		 <a href="/forget.html" class="login-fgetpwd" >忘记密码？</a>
            		 <?= $form->field($model,'rememberMe',['template'=>'记住密码 <input id="loginform-rememberme" class="form-control" type="checkbox" value="1" name="LoginForm[rememberMe]">']) ?>            		 
            	<?php ActiveForm::end()?>
            	
            	
            	<div class="logins">
            		<div class="wx">
            			<img src="index\images\weixin.png"/>
            		</div>
            		<div class="wx">
            			<img src="index\images\qq.png"/>
            		</div>
            	</div>
            	<div class="sas">
            		<a href="/register.html">还没注册账号！</a>
            	</div>
            </div>            
	</body>
</html>
