<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '添加友链';
$this->params['menu_name']='blog';
$this->params['sidebar_name']='添加友链';
$this->params['three_menu']='友链管理';

?>
<div class="content">
<?php if ($isNew == true){ ?>
    <h3>添加友链</h3>
<?php }else{?>
    <h3>编辑友链</h3>
<?php } ?>
	<div class="container">
                <div class="row">
    			<?php $form = ActiveForm::begin(['id'=>'create-form','options'=>['enctype'=>'multipart/form-data']])?>
    			<div id="uploads" class="form-group ">
				<?=$form->field($model,'title');?>
				<?=$form->field($model,'url');?>
				<?=$form->field($model,'sort');?>
				<?=$form->field($model,'status')->widget('\\kartik\\widgets\\SwitchInput');?>
    			</div>
    			<div class="form-group ">
				<?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
    			</div>
    			<?php ActiveForm::end();?>
		</div>
	</div>
</div>

