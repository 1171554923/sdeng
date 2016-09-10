<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
    
$this->title='水灯社区  - 有趣的视频和有趣的图片 --就水灯吧';
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
        <meta charset="<?= Yii::$app->charset ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel = "Shortcut Icon" href="index\images\web_icon.ico" />
         <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>          
			<?=Html::cssFile('@web/index/css/common.css') ?>   
		    <?=Html::cssFile('@web/index/css/frontStyle.css') ?>
		    <?=Html::jsFile('@web/index/js/jquery-1.7.2.min.js')?>
		    <?=Html::jsFile('@web/index/js/common.js')?>
        </head>                
            <body class="main">
                <?php $this->beginBody()?>
                	<header>
                		<div class="top">
                				<a class="logo" href="javascript:viod(0)"></a>
                				<ul class="menu">
                					<li class="check"><a href="?r=index">首页</a></li>
                					<li><a href="#">风云榜</a></li>
                					<li><a href="#">用户提交</a></li>                					                				
                				</ul>                			
                				<ul class="user">
                					<li class="update"><a href="#">上传</a></li>      
                					<?php  
                					if(Yii::$app->user->isGuest)
                					{
                					  echo '<li class="login"><a href="/login.html" target="_blank">登陆</a></li>';
                					}else {
                					  echo '<li class="personal_g"><img src="../index/images/default_profile_image_thumb.png"></li><span id="down"  data="1" class="down">1
            </span>';
//                 					   echo Yii::$app->user->identity->username;
                					}
                					?>           					             					             				                					
                				</ul>
                			
                				<ol class="profile">
                					<li class="name">用户名</li>
                					<li class="name_c">@<?php if(!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->username ;} ?></li>
                					<li><a href="/logout">设置</a></li>
                					<li><a href="/logout">帮助</a></li>
                					<li><a href="/logout.html">退出</a></li>                					
                				</ol>	                				
                		</div>                		
                	</header> 
                		<nav>
                			<a  href="#">搞笑视频</a>
                			<a href="#">搞笑图片</a>
                			<a href="#">娱乐话题</a>
                			<a href="#">美女</a>
                			<a href="#">美女</a>
                			<a href="#">美女</a>
                			<span class="serach"><input type="text" placeholder="查找 水灯"></span>
                		</nav>
                	<?php  echo $content?>
                <?php $this->endBody()?>
           </body>
</html>
<?php $this->endPage()?>
