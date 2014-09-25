<h1>События</h1>
<a href="/admin/events/create" class="btn btn-default">Создать</a>
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
        <?php $count = count($events); for($i = 0; $i < $count; $i++){ ?>
            <tr>
                <td><?php echo $events[$i]->eventId; ?></td>
                <td><?php echo $events[$i]->name; ?></td>
                <td style="text-align: right;">
                    <a href="/admin/cities/update?id=<?php echo $events[$i]->eventId; ?>">Редактировать</a>
                    <form method="POST" action="/admin/events/delete" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?= $events[$i]->eventId; ?>">
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