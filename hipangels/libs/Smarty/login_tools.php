<?php

date_default_timezone_set('Europe/london');

require 'Smarty.class.php';

$smarty = new Smarty;


$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

$smarty->display('login_tools.tpl');

function load( $page = 'login.php')
{

	$url = 'http://' . $_SERVER[ 'HTTP_HOST'] .
				dirname($_SERVER[ 'PHP_SELF' ]);

	$url = rtrim( $url , '/\\') ;
	$url .= '/' . $page ;

	//header( "location: $url");
	exit();
}

	function validate( $dbc , $email = '' , $pwd = '') 

	{

		$errors = array() ;
		 if ( empty( $email))
		 	{ $errors[] = 'Enter your email address.' ; }
		 else
		 	{ $e = mysqli_real_escape_string( $dbc, trim( $email)) ; }

	
	
	if ( empty( $pwd ))
	{ $errors [] = 'Enter your password.' ; }
	else
	{ $p = mysqli_real_escape_string( $dbc , trim( $pwd)) ; } 
	
	if ( empty( $errors))
	{	
		$q = "SELECT user_id, first_name, last_name 
		FROM users 
		WHERE email = '$e'
		AND pass = SHA1 ( '$p') " ;
 //echo $q;
 //exit ();
		$r = mysqli_query ( $dbc , $q) ;

		if ( mysqli_num_rows( $r ) == 1 )
			{ 
				$row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) ;
				return array( true , $row ) ;
			 }
			 else 
			 	{  $errors[] = 'Email address and password not found.' ; }

	}	
		return array(false , $errors) ; 
}	

























