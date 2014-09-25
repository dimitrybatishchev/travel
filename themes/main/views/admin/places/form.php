<h1>Достопримечательности</h1>
<br/>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'places-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
        'enctype'=>'multipart/form-data'
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
    <div class="form-group <?if($form->error($model,'relatedCountryId')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Страна</label>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'relatedCountryId', CHtml::listData(Countries::model()->findAll(), 'countryId', 'name'), array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'relatedCityId')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Город</label>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model, 'relatedCityId', CHtml::listData(Cities::model()->findAll(), 'cityId', 'name'), array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'price')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Цена</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'price', array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'timeToVisit')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Сколько нужно часов на посещение</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'timeToVisit', array('class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group <?if($form->error($model,'rating')):?>has-error<? endif; ?>">
        <label class="col-sm-2 control-label">Рейтинг</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'rating', array('class'=>'form-control')); ?>
        </div>
    </div>
<div class="form-group <?if($form->error($model,'images')):?>has-error<? endif; ?>">
    <label class="col-sm-2 control-label">Картинки</label>
    <div class="col-sm-10">
        <table class="js-images">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <? foreach($model->images as $image): ?>
                <tr>
                    <td></td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>

        <br><a href="#" id="add-image">Добавить новую</a>
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
    <form method="POST" action="/admin/places/delete">
        <input type="hidden" name="id" value="<?= $model->placeId ?>">
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
<? endif; ?>

<script type="text/javascript">
    $(function()
    {
        $('.redactor').redactor();
    });
</script>

<script type="text/javascript">
    $(function()
    {
        $('#add-image').click(function(e){
            e.preventDefault();

            var html = '';
            html += '<tr><td><input type="file" name="images[]"></td></tr>'

            $('.js-images tbody').append(html);
        });
    });
</script>