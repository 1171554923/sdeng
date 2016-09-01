<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;



$this->title="登陆界面";
//引入css界面

$session =Yii::$app->session;
// $session['']
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>" />
		<title><?=  Html::encode($this->title)?></title>
		
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php Yii::$app->basePath?>/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php Yii::$app->basePath?>/admin/css/font-awesome.min.css" />
		<style type="text/css" rel="styleSheet">
           .icon-lock , .icon-user { padding-top:33px !important; }
           .yzm{width:150px; !important; }
          
        </style>
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php Yii::$app->basePath?>/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->


		<!-- ace styles -->

		<link rel="stylesheet" href="<?php Yii::$app->basePath?>/admin/css/ace.min.css" />
		<link rel="stylesheet" href="<?php Yii::$app->basePath?>/admin/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php Yii::$app->basePath?>/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php Yii::$app->basePath?>/admin/js/html5shiv.js"></script>
		<script src="<?php Yii::$app->basePath?>/admin/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">		
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">水灯</span>
									<span class="white">后台管理系统</span>
								</h1>
								<h4 class="blue">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												请输入您的管理员账号
											</h4>

											<div class="space-6"></div>

											<?php $form = ActiveForm::begin(); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															 <?= $form->field($model, 'username')->label('账 号 :') ?>  
															<i class="icon-user"></i> 
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?= $form->field($model, 'password')->passwordInput(['maxlength' => 20])->label('密 码 :')?>
															
															<i class="icon-lock"></i> 
														</span>
													</label>
													
												 <?= $form->field($model,'captcha')->widget(yii\captcha\Captcha::className(),
											
	    [											
	    'captchaAction'=>'login/captcha',											
	    'imageOptions'=>['alt'=>'点击换图',											
	    'title'=>'点击换图',
	    'style'=>'cursor:pointer'],											
	    'template'=>"<div class=\"row\"><div class=\"col-xs-6\">{input}</div><div class=\"col-xs-6\">
{image}</div></div>",			        						
	        ]) ?>																																														
													<div class="space"></div>																																																																					
													<div class="clearfix">
														<label class="inline">															
															<span class="lbl">															
															</span>
														</label>																																								
															 <?= Html::submitButton('　登陆',['class'=>'width-35 pull-right btn btn-sm btn-primary icon-key'])?>  														
													</div>

													<div class="space-4"></div>
													
												</fieldset>
											<?php ActiveForm::end(); ?>
										
											<!-- /widget-main -->									
								</div><!-- /login-box -->													

					</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

</body>
</html>
