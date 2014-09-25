<h1>Достопримечательности</h1>
<a href="/admin/places/create" class="btn btn-default">Создать</a>
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
        <?php $count = count($places); for($i = 0; $i < $count; $i++){ ?>
            <tr>
                <td><?php echo $places[$i]->placeId; ?></td>
                <td><?php echo $places[$i]->name; ?></td>
                <td>
                    <a href="/admin/places/update?id=<?php echo $places[$i]->placeId; ?>">Редактировать</a>
                    <form method="POST" action="/admin/places/delete" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?= $places[$i]->placeId; ?>">
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