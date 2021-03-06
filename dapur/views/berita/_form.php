<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
	    'model' => $model,
		    'template' => '{addon}{input}',
		        'clientOptions' => [
		            'autoclose' => true,
		            'format' => 'yyyy-mm-dd'
		        ]
	]) ?>
   

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>
    <?php 
    	echo $form->field($model, 'kategori_id')->dropDownList($kategori_list);
     ?>


    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
