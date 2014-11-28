
<?php 

date_default_timezone_set('Europe/london');

require 'Smarty.class.php';

$smarty = new Smarty;


$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

$smarty->display('login.tpl');

$page_title ='Login' ;



	if ( isset( $errors) && !empty($errors))
	{
		echo '<p id="err_msg">Oops! There was a problem:<br>' ;
		foreach ($errors as $msg) 
	{
		echo " - $msg<br>" ;
	}

	echo 'Please try again or 
				<a href="register.php">Register</a></p>';
	}
	?>





 