<?php
namespace moonland\select2;

use yii\web\AssetBundle;
/**
 * Bootstrap Asset Bundle
 * @author Moh Khoirul Anam <moh.khoirul.anaam@gmail.com>
 * @copyright moonlandsoft 2014
 * @since 1
 */
class Select2Asset extends AssetBundle
{
	public $sourcePath = '@moonland/select2/dist';
	
	public $css = [
		'css/select2.css',
		'css/select2-bootstrap.css',
	];
	
	public $js = [
		'js/select2.js',
	];
	
	public $depends = [
		'yii\web\JqueryAsset',
	];
}