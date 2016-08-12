<?php

/* @var $this yii\web\View */

$this->title = 'Menü Planer | Home';
?>
<div class="site-index">

    <h1>Menü Planer</h1>
    <p>Das ist die Menü Planer App. Folgende Bereiche können benutzt werden.</p>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-2">
                <img src="../web/assets/calendar.png">
            </div>
            <div class="col-lg-4">
                <h2>Menüplan</h2>
                <p>Der Plan ist ein Kalender, welcher die geplanten Gerichte für jeden Tag enthält. Hier findest du eine
                    Übersicht für jeden Tag.</p>

                <p><a class="btn btn-default" href="<?php echo \yii\helpers\Url::toRoute('plan/calendar') ?>">
                        <img style="height: 20px; margin-right: 5px;" src="../web/assets/calendar.png">zum Menüplan &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="../web/assets/meal2.png">
            </div>
            <div class="col-lg-4">
                <h2>Gerichte</h2>

                <p>Hier gibt es eine Übersicht vorhander Gerichte. Neue Gerichte können hinzugefügt und bestehende
                    abgeändert werden. Außerdem können Gerichte bewertet werden.</p>

                <p><a class="btn btn-default" href="<?php echo \yii\helpers\Url::toRoute('meal/list') ?>">
                        <img style="height: 20px; margin-right: 5px;" src="../web/assets/meal2.png">zu den Gerichten &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="../web/assets/sideDishes.png">
            </div>
            <div class="col-lg-4">
                <h2>Zutaten</h2>

                <p>Hier findest du eine Liste aller bekannten Beilagen, deren Zutaten, Rezepte, Preis, Kalorien und Zubereitungszeit. </p>

                <p><a class="btn btn-default" href="<?php echo \yii\helpers\Url::toRoute('dish/list') ?>">
                        <img style="height: 20px; margin-right: 5px;" src="../web/assets/sideDishes.png">zu den Zutaten &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
