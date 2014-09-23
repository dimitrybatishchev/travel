<h1>Страны</h1>
<a href="/admin/countries/create" class="btn btn-default">Создать</a>
<br/>
<br/>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $count = count($countries); for($i = 0; $i < $count; $i++){ ?>
            <tr>
                <td><?php echo $countries[$i]->country_id; ?></td>
                <td><?php echo $countries[$i]->name; ?></td>
                <td>
                    <i><a href="/admin/countries/update?id=<?php echo $countries[$i]->country_id; ?>">Редактировать</a></i>
                </td>
            </tr>
        <? } ?>
    </tbody>
</table>

<? $this->widget('CLinkPager', array(
    'pages' => $pagination,
    'htmlOptions'=>array(
        'class'=>'pagination',
        'style'=>'',
    ),
    'cssFile' => '',
    'header' => '',
    'firstPageCssClass'=> '',
    'lastPageCssClass'=> '',
    'previousPageCssClass' => '',
    'nextPageCssClass' => '',
    'internalPageCssClass' => '',
    'selectedPageCssClass' => '',
    'hiddenPageCssClass'=> '',
    'maxButtonCount' => 4,
    'prevPageLabel' => '&larr;',
    'nextPageLabel' => '&rarr;',
    'firstPageLabel'=> '<<',
    'lastPageLabel'=> '>>',
))?>