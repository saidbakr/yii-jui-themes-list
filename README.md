# yii-jui-themes-list
A yii2 widget that displays a list of jui themes and applying change to the selected theme then saving the choice by a mean of cookie.

##Installation
Till this time I could not able to maintain it via composer. Howver, the installation is very easy as follows:

 1. Make sure that your Yii2 project has yii2-jui extenstion.
 2. Create a directory named `saidbakr` under the `vendor` directory of your Yii2 project.
 3. Copy all the files in this respiratory to that folder `vendor\saidbakr`.

##Usage
Simply you can use it in your views to render a select options list for the themes as follows:

```
<?php
// Use keyword
use vendor\saidbakr\JuiThemeSelectWidget;
?>

<?= JuiThemeSelectWidget::widget() ;?>
// Or supplying the options like the following
<?= JuiThemeSelectWidget::widget(['label' => 'Select New JUI Theme', 'themeListId' => 'fox']) ;?>

```
