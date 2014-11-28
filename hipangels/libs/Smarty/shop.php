 <?php 

date_default_timezone_set('Europe/london');

require 'Smarty.class.php';

$smarty = new Smarty;


$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

$smarty->display('product_quick_view.tpl');


session_start();

if ( !isset( $_SESSION[ 'user_id']))
	{ 
	  require ( 'login_tools.php') ;
	  load();

	 }

	 $page_title = 'Shop' ;
	

	 require ('connect_db.php') ;


	 $q = "SELECT * FROM shop" ;
	 $r = mysqli_query( $dbc , $q ) ;
	 if ( mysqli_num_rows( $r ) > 0 )
	 
	{
	
			echo '<table> <tr>';
	 	while ( $row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) )
	 		{
	 		 echo '<td> <strong>' . $row['item_name'] . 
	 		  '</strong> <br>' . $row['item_desc'] .
	 		  '<br> <img src='. $row['item_img'].
	 		  '> <br>$' . $row['item_price'].
	 		  '<br> <a href="added.php?id=' . $row['item_id'] .
	 		  "'>Add To Cart</a> </td>';
	 		 }
	 		 echo '</tr> </table>' ;
	 		 mysqli_close( $dbc);
	}
	 		else 
    { 
	 echo '<p> There are currently no items in this shop.</p>'; 
	}
            
	 		  
                  echo '<p> <a href='cart.php'> View cart</a>
   			 			<a href='forum.php'>Forum</a>
   						<a href='goodbye.php'>Logout</a></p>' ;  
	 		 		   
	 		
			



