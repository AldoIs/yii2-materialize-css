<?php 
namespace common\assets;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{

	public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
    ];
    public $js = [
        'js/materialize.min.js',
        ];
} // END MaterlizeAsset class 

 