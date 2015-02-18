<?php
/* @var $this yii\web\View */
$this->title = 'Расписание и ближайшие события';
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="text-center text-info">Расписание</h1>
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th class="info">Пара</th>
                <th class="info">Сегодня</th>
                <th class="info">Завтра</th>
                <th class="info">Послезавтра</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="info">
                    <b>1</b>
                </td>
                <td>---</td>
                <td>---</td>
                <td>С++(Л)</td>
            </tr>
            <tr>
                <td class="info">
                    <b>2</b>
                </td>
                <td>С++(П)</td>
                <td>---</td>
                <td>Сети(П)</td>
            </tr>
            <tr>
                <td class="info">
                    <b>3</b>
                </td>
                <td>ООП(П)</td>
                <td>КППФ(П)</td>
                <td>---</td>
            </tr>
            <tr>
                <td class="info">
                    <b>4</b>
                </td>
                <td>---</td>
                <td>КПРФ(Л)</td>
                <td>---</td>
            </tr>
            <tr>
                <td class="info">
                    <b>5</b>
                </td>
                <td>Сети (Л)</td>
                <td>Ф-РА</td>
                <td>ННК(Л)</td>
            </tr>
            <tr>
                <td class="info">
                    <b>6</b>
                </td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td class="info">
                    <b>7</b>
                </td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            </tbody>
        </table>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Особые события</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">Консультация</li>
                    <li class="list-group-item">Актив</li>
                    <li class="list-group-item">ЛАЛЛАЛА</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h1 class="text-center text-info">События</h1>
        <ul class="media-list">
            <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="http://placehold.it/64x64"></a>
                <div class="media-body">
                    <h4 class="media-heading">Заголовок новости</h4>
                    <p>Ну и тут типо текст</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#"><img class="img-rounded media-object" src="http://placehold.it/64x64"></a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                        tempus viverra turpis.</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="http://placehold.it/64x64"></a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                        tempus viverra turpis.</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#"><img class="media-object" src="http://placehold.it/64x64"></a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                        tempus viverra turpis.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">С++</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Преподаватель</th>
                        <th>
                            <span style="font-weight: normal;">Лысачев Петр Сергеевич</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <b>Аудитория</b>
                        </td>
                        <td>Л4 (291)</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Типо оценки</b>
                        </td>
                        <td>Зачет</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Важность предмета</b>
                        </td>
                        <td>Высокое</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
