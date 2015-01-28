<?php
namespace saidbakr\tools;
use yii\web\AssetBundle;

/*
 * It is free for use and modify with one simple rule:
 * regarding credits for the author either it modified or not
 * Author: Said Bakr. said_fox@yahoo.com
 * http://2index.net
 */

/**
 * Description of Kabb
 *
 * @author Said
 */
class JuiThemeSelectAsset extends AssetBundle
{
  public $sourcePath = '@vendor/saidbakr/yii-jui-themes-list';
    
    public $autoGenerate = true;
    /**
     * @inheritdoc
     */
	public $js = ['jquery.cookie.js','JuiThemeSelect.js'];
    public $depends = [
        'yii\jui\JuiAsset',
    ];
}

