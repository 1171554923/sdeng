<?php
use yii\helpers\Html;
$this->title='登陆';
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
        <meta charset="<?= Yii::$app->charset ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>
			<?=Html::cssFile('@web/index/css/common.css') ?>                       
            <?=Html::cssFile('@web/index/css/login.css') ?>
            <?=Html::jsFile('@web/index/js/jquery-1.7.2.min.js')?>
        </head>                
            <body>                                
            <div class="logo_box">
            	<h3>水灯社区欢迎你</h3>
            	<form action="#" name="f" method="post">
            		<div class="input_outer">
            			<span class="u_user"></span>
            			<input name="logname" class="text" onFocus=" if(this.value=='输入ID或用户名登录') this.value=''" onBlur="if(this.value=='') this.value='输入ID或用户名登录'" value="输入ID或用户名登录" style="color: #FFFFFF !important" type="text">
            		</div>
            		<div class="input_outer">
            			<span class="us_uer"></span>
            			<label class="l-login login_password" style="color: rgb(255, 255, 255);display: block;">输入密码</label>
            			<input name="logpass" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" onFocus="$('.login_password').hide()" onBlur="if(this.value=='') $('.login_password').show()" value="" type="password">
            		</div>
            		<div class="mb2"><a class="act-but submit" href="javascript:;" style="color: #FFFFFF">登录</a></div>
            		<input name="savesid" value="0" id="check-box" class="checkbox" type="checkbox"><span>记住用户名</span>
            	</form>
            	<a href="#" class="login-fgetpwd" >忘记密码？</a>
            	<div class="logins">
            		<div class="wx">
            			<img src="index\images\weixin.png"/>
            		</div>
            		<div class="wx">
            			<img src="index\images\qq.png"/>
            		</div>
            	</div>
            	<div class="sas">
            		<a href="#">还没注册账号！</a>
            	</div>
<!--             	<div class="sas"> 
            		<a href="#" style="color: red;">亲哈社区电商地址，亲购物，轻生活！</a>
<!--             	</div> -->
            </div>            
	</body>
</html>
