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
            <?=Html::jsFile('@web/index/js/jquery-1.7.2.min.js')?>
            
			<?=Html::cssFile('@web/index/css/common.css') ?>   
		    <?=Html::cssFile('@web/index/css/frontStyle.css') ?>                              
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
                					<li class="login"><a href="?r=user" target="_blank">登陆</a></li>
                				</ul>	                				
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
