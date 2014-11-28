<?php

date_default_timezone_set('Europe/london');

require 'Smarty.class.php';

$smarty = new Smarty;

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

$smarty->display('christmas.tpl');
