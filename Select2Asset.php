<?php
namespace bootui\select2;

use yii\web\AssetBundle;
/**
 * Bootstrap Asset Bundle
 * @author Moh Khoirul Anam <moh.khoirul.anaam@gmail.com>
 * @copyright moonlandsoft 2014
 * @since 1
 */
class Select2Asset extends AssetBundle
{
	public $sourcePath = '@bootui/select2/dist';
	
	public $css = [
		'select2.css',
		'select2-bootstrap.css',
	];
	
	public $js = [
		'select2.js',
	];
	
	public $depends = [
		'yii\web\JqueryAsset',
	];
}