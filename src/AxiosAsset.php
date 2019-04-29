<?php
/**
 * @link https://github.com/andymark-by/yii2-axios
 * @copyright Copyright (c) 2019 Andrei Baturin
 * @license https://github.com/andymark-by/yii2-axios/blob/master/LICENSE
 */

namespace andymark-by\axios;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class AxiosAsset
 *
 * Registers Axios.js
 *
 * @author Andrei Baturin <andymark.bel@gmail.com>
 * @package andymark-by/yii2-axios
 */
class AxiosAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/vue/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        YII_ENV_DEV ? 'axios.js' : 'axios.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
