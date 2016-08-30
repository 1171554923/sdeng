<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Arcrank */

$this->title = 'Create Arcrank';
$this->params['breadcrumbs'][] = ['label' => 'Arcranks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="?r=admin/arcrank">等级管理</a>
							</li>
							<li class="active">新建等级</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					
<div class="arcrank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
