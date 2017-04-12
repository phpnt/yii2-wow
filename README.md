phpNT - Yii2 WOW
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-wow/v/stable)](https://packagist.org/packages/phpnt/yii2-wow) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-wow/downloads)](https://packagist.org/packages/phpnt/yii2-wow) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-wow/v/unstable)](https://packagist.org/packages/phpnt/yii2-wow) [![License](https://poser.pugx.org/phpnt/yii2-wow/license)](https://packagist.org/packages/phpnt/yii2-wow)
### Описание:
### Вызывает анимацию при прокрутке. Хороший Animate.css Друг :-) Легко настраиваиваются параметры анимации: стиль, задержка, длина, смещение, итерации.
### [DEMO](http://phpnt.com/widget/wow)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-wow" "*"
```
или

```
composer require phpnt/yii2-wow
```

или добавить в composer.json файл

```
"phpnt/yii2-wow": "*"
```

### Представление:
------------
```php
<?php
use phpnt\wow\WowAsset;
WowAsset::register($this);
?>
```
html
<div class="container">
    <div class="col-md-12 text-center">
        <div class="row">
            <div class="col-md-4 wow bounce">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow flip">
                <p class="circle bg-primary"  style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow bounceInUp">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow zoomIn">
                <p class="circle bg-primary"  style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow hinge">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow lightSpeedIn">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow rollIn">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow swing">
                <p class="circle bg-primary"  style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
            <div class="col-md-4 wow shake">
                <p class="circle bg-primary" style="border-radius: 200px; height: 200px; width: 200px;"></p>
            </div>
        </div>
    </div>
</div>


# Документация (примеры):
## [WOW](http://mynameismatthieu.com/WOW/)
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
