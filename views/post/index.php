<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<?php foreach ($posts as $post):?>
<div>
    <h1><a href="<?= \yii\helpers\Url::to(['post/view', 'id'=> $post->id])?>"><?=$post->title;?></a></h1>
    <?= \yii\helpers\Html::img("@web/images/{$post->img}", ['class' => 'xxx']);?>
    <p><?=$post->excerpt;?></p>
    <?php if($post->id%2>0):?>
        <p><?=Yii::$app->formatter->asDate($post->create_at);?></p>
    <?php else:?>
        <p><?=Yii::$app->formatter->asDate($post->create_at, "php: d.m.Y");?></p>
    <?php endif;?>
    <p><a href="<?= \yii\helpers\Url::to(['category/view', 'alias' => $post->category->alias])?>"><?=$post->category->title;?></a></p>
</div>
<div>
    <?= \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
    ]);?>
</div>
<?php endforeach?>
<div id="katalog" class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Популятрные виды работ</h3>
            <div id="katalog-items">
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-green"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="full_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
                <div class="katalog-item">
                    <div class="light-red"></div>
                    <div class="stars"></div>
                    <div class="count">(54)</div>
                    <div class="price">199 <span class="rubble">&#8381</span></div>
                    <div class="cal"></div>
                    <div class="photo">
                        <div class="vid"></div>
                    </div>
                    <div class="big_star"></div>
                    <div class="name">Имя</div>
                    <div class="lastname">Фамилия</div>
                    <div class="ok-bad">
                        <div class="ok">21</div>
                        <div class="bad">12</div>
                    </div>
                    <div class="item-description">Штукатурка потолка по маякам (до 3 см) угол 90 гр</div>
                </div>
            </div>
        </div>
    </div>
</div>
