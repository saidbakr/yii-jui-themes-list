<?php
namespace vendor\saidbakr;

use yii;
use yii\base\Widget;
//use yii\web\View;
//use yii\web\JqueryAsset;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JuiThemeSelectWidget
 *
 * @author Said Bakr
 */
class JuiThemeSelectWidget extends Widget
{
  private $list;
  private $script;
  private static $juiThemeSelectId = 'JuiThemesList';
  public $themeListId;
  public $label;
  public function init() {
	parent::init();
	if ($this->themeListId)	  self::$juiThemeSelectId = $this->themeListId;
	$this->list = $this->createSelectList($this->getThemesList());
	$this->makeScript();
  }
  public static function getThemesList()
  {
	$themesPath =  dirname(Yii::$app->basePath).DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."bower".DIRECTORY_SEPARATOR."jquery-ui".DIRECTORY_SEPARATOR."themes";
	$output = [];
	foreach (scandir($themesPath) as $item){
	  if (is_dir($themesPath.DIRECTORY_SEPARATOR.$item) && ($item != '.' && $item !='..')) $output[] = $item;
	}
	return $output;
  }
  
  public static function createSelectList($items)
  {	
	$juiThemeSelectId = self::$juiThemeSelectId;	
	$output = '';
	$output .= "<select id=\"$juiThemeSelectId\">"."\n";
	foreach ($items as $item){
	  $output .= "<option value='$item'>$item</option>\n";
	}
	$output .= "</select>\n";
	return $output;
  }
  
  /**
   * Making the client-side script for the list   */
  
  private  function makeScript()
  {
	
	$t = self::$juiThemeSelectId;
	$this->script = <<<EOD
			
<script>
	var juiThemeSelectId = "$t"   
</script>			
EOD;
		
  }
  public function run() {
	parent::run();	
	JuiThemeSelectAsset::register($this->getView());	
	return "$this->label $this->list \n $this->script";
  }
}


