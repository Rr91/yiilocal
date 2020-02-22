<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>




<div class="container">
    <div id="top" class="row">
        <div class="col-lg-2">
            <div id="logo">OliFA</div>
        </div>
        <div id="top-nav" class="col-lg-3 offset-7">
            <ul>
                <li><a href="#">Вход</a></li>
                <li><a href="#">Регистрация</a></li>
            </ul>
        </div>
    </div>
</div>





<div class="container-fluid">
    <div class="row">
        <div id="slide" class="col-lg-12">
            <div class="row">
                <div class="slide-block col-lg-4">
                    <h1>Качество<br>Исполнителя</h1>
                </div>
                <div class="slide-block col-lg-4">
                    <h1>Гарантия<br>OliFA</h1>
                </div>
                <div class="slide-block col-lg-4">
                    <h1>Доверие<br>Заказчика</h1>
                </div>
            </div>
        </div>
    </div>
</div>





<div id="how" class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Как это работает?</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <h4>Поиск</h4>
            <div class="how-img-1"></div>
            <div class="how-description">Задай поиск<br>по виду работ</div>
        </div>
        <div class="col-lg-3">
            <h4>Выбор</h4>
            <div class="how-img-2"></div>
            <div class="how-description">Выбери понравившегося<br>исполнителя</div>
        </div>
        <div class="col-lg-3">
            <h4>Договор</h4>
            <div class="how-img-3"></div>
            <div class="how-description">Используй чат, обсуждай<br>детали, обменивайся файлами</div>
        </div>
        <div class="col-lg-3">
            <h4>Оплата</h4>
            <div class="how-img-4"></div>
            <div class="how-description">Оплачивай заказ, возврат<br>денег в один клик</div>
        </div>
    </div>
</div>





<div id="search" class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="search">Задай поиск по виду работ</div>
                    </div>
                    <div class="col-lg-6 offset-1">
                        <form>
                            <div>
                                <input type="search" id="mySearch" name="q" placeholder="Поиск...">
                                <button></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="nav" class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="main-menu">
                <li>
                    <a href="#" class="noLink">Стены</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Штукатурка стен по маякам (до 3 см) угол 90 гр. </a>
                        </li>
                        <li>
                            <a href="#">Штукатурка насдир (визуальная)</a>
                        </li>
                        <li>
                            <a href="#">Шпатлевка стен под обои (обои под покраску)</a>
                        </li>
                        <li>
                            <a href="#">Шпатлевка стен под покраску</a>
                        </li>
                        <li>
                            <a href="#">Монтаж перегородок из  пазогребневых блоков</a>
                        </li>
                        <li>
                            <a href="#">Поклейка обоев с подгоном рисунка</a>
                        </li>
                        <li>
                            <a href="#">Поклейка обоев без подгона рисунка</a>
                        </li>
                        <li>
                            <a href="#">Покраска стен водоэмульсионной краской (2 слоя)</a>
                        </li>
                        <li>
                            <a href="#">Облицовка стен плиткой</a>
                        </li>
                        <li>
                            <a href="#">Штукатурка откосов</a>
                        </li>
                        <li>
                            <a href="#">Шпатлевка откосов</a>
                        </li>
                        <li>
                            <a href="#">Покраска откосов</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="noLink">Полы</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Гидроизоляция пола</a>
                        </li>
                        <li>
                            <a href="#">Устройство стяжки цементно-песчаной смесью до 5 см</a>
                        </li>
                        <li>
                            <a href="#">Выравнивание пола самонивелирующей смесью</a>
                        </li>
                        <li>
                            <a href="#">Монтаж электрического теплого пола</a>
                        </li>
                        <li>
                            <a href="#">Укладка паркетной доски</a>
                        </li>
                        <li>
                            <a href="#">Укладка плитки на пол</a>
                        </li>
                        <li>
                            <a href="#">Установка плинтуса МДФ</a>
                        </li>
                        <li>
                            <a href="#">Установка пластикового плинтуса</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="noLink">Потолки</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Штукатурка потолка по маякам (до 3 см) угол 90 гр</a>
                        </li>
                        <li>
                            <a href="#">Штукатурка  потолка насдир (визуальная)</a>
                        </li>
                        <li>
                            <a href="#">Шпатлевка потолка под покраску</a>
                        </li>
                        <li>
                            <a href="#">Монтаж потолков из гипсокартона</a>
                        </li>
                        <li>
                            <a href="#">Шпатлевка ГКЛ потолка под покраску</a>
                        </li>
                        <li>
                            <a href="#">Покраска потолка водоэмульсионной краской (2 слоя)</a>
                        </li>
                        <li>
                            <a href="#">Монтаж натяжных потолков ПВХ Pongs белый матовый</a>
                        </li>
                        <li>
                            <a href="#">Монтаж натяжных потолков ПВХ Pongs белый</a>
                        </li>
                        <li>
                            <a href="#">Монтаж натяжных потолков Decorum by Clipso</a>
                        </li>
                        <li>
                            <a href="#">Монтаж натяжных потолков Descor D-Premium</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Сантехника</a>
                </li>
                <li>
                    <a href="#">Электрика</a>
                </li>
                <li>
                    <a href="#" class="noLink">Двери, окна</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Установка одностворчатой двери монтаж коробки полотна врезка петель добор замок</a>
                        </li>
                        <li>
                            <a href="#">Установка входной металической двери</a>
                        </li>
                        <li>
                            <a href="#">Установка двустворчатой двери монтаж коробки полотна врезка петель добор замок</a>
                        </li>
                        <li>
                            <a href="#">Установка готовой арки</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Дизайн</a>
                </li>
                <li>
                    <a href="#">Эксперт на час</a>
                </li>
                <li>
                    <a href="#">Демонтажные работы</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<?=$content;?>





<div id="news" class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Новости OliFA</h3>
            <div id="news-items">
                <div class="news-item"></div>
                <div class="news-item"></div>
                <div class="news-item"></div>
                <div class="news-item"></div>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div id="footer" class="col-lg-12">
            <div class="about">о OliFA</div>
            <div class="social">
                <div class="social-line1">
                    <div class="social-line1-item"></div>
                    <div class="social-line1-item"></div>
                    <div class="social-line1-item"></div>
                </div>
                <div class="social-line2">
                    <div class="social-line2-item"></div>
                    <div class="social-line2-item"></div>
                    <div class="social-line2-item"></div>
                </div>
            </div>
            <div class="support">служба поддержки</div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>






</body>
</html>
<?php $this->endPage() ?>
