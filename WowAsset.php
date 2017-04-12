<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 11.04.2017
 * Time: 13:10
 */

namespace phpnt\wow;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class WowAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/wow';

    /**
     * @inherit
     */
    public $css = [

    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/wow.min.js'
    ];

    public $depends = [
        'phpnt\animateCss\AnimateCssAsset',
    ];

    public function init()
    {
        $this->registerJs();
        parent::init();
    }

    protected function registerJs()
    {
        $js = <<<JS
        new WOW().init();
JS;
        \Yii::$app->view->registerJs($js);
        return $this;
    }
}