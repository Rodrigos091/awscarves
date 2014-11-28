<?php






require_once('../Smarty/libs/Smarty.class.php') ;

$smarty = new Smarty() ;
$smarty ->template_dir = 'views' ;
$smarty ->compile_dir = 'tmp' ;

$smarty->display('index.tpl') ;
?>