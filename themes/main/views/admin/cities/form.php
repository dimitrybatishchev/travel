<h1>Города</h1>
<br/>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'city-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
    ),
)); ?>
    <div class="form-group <?if($form->error($model,'name')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Имя</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'name', array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'alias')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Псевдоним</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'alias', array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'relatedCountryId')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Страна</label>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'relatedCountryId', CHtml::listData(Countries::model()->findAll(), 'countryId', 'name'), array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'shortDescription')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Краткое описание</label>
        <div class="col-sm-10">
            <?php echo $form->textArea($model,'shortDescription', array('class'=>'redactor')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'fullDescription')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Полное описание</label>
        <div class="col-sm-10">
            <?php echo $form->textArea($model,'fullDescription', array('class'=>'redactor')); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
<?php $this->endWidget(); ?>

<hr>

<? if(Yii::app()->controller->action->id == 'update'): ?>
    <form method="POST" action="/admin/cities/delete">
        <input type="hidden" name="id" value="<?= $model->cityId ?>">
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
<? endif; ?>

<script type="text/javascript">
    $(function()
    {
        $('.redactor').redactor();
    });
</script>