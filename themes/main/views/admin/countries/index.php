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
                <td><?= $countries[$i]->countryId; ?></td>
                <td><?= $countries[$i]->name; ?></td>
                <td style="text-align: right;">
                    <a href="/admin/countries/update?id=<?php echo $countries[$i]->countryId; ?>">Редактировать</a>
                    <form method="POST" action="/admin/countries/delete" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?= $countries[$i]->countryId; ?>">
                        <input type="submit" value="Удалить" class="btn btn-danger btn-xs">
                    </form>
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