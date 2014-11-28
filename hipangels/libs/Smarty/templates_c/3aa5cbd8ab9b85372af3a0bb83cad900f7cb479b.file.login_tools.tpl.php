<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-25 14:45:55
         compiled from "templates/login_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1817407128547496230a5e18-39848748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa5cbd8ab9b85372af3a0bb83cad900f7cb479b' => 
    array (
      0 => 'templates/login_tools.tpl',
      1 => 1416920213,
      2 => 'file',
    ),
    '8d9f3ed9a5d9b908cc431a60a2dc9782fba7a63b' => 
    array (
      0 => 'templates/layout_blocks/layout_blocks_login_tools.tpl',
      1 => 1416920022,
      2 => 'file',
    ),
    'dd491d73bac1186339951913dd24f9f9b1b5eb62' => 
    array (
      0 => 'templates/single_block_main_header.tpl',
      1 => 1416921350,
      2 => 'file',
    ),
    '138d68e9b6b4ef7d11c03cde27e581d95c1eaaae' => 
    array (
      0 => 'templates/single_block_main_footer.tpl',
      1 => 1416588394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817407128547496230a5e18-39848748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5474962321aad0_88352906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474962321aad0_88352906')) {function content_5474962321aad0_88352906($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  
</head>

<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1817407128547496230a5e18-39848748');
content_547496231f4c77_97629732($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>




 

<div id=''>
<div class="">





<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1817407128547496230a5e18-39848748');
content_547496232161f8_37824701($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-25 14:45:55
         compiled from "templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547496231f4c77_97629732')) {function content_547496231f4c77_97629732($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->

   <!-- jQuery - the core -->
	<?php echo '<script'; ?>
 src="js/jquery-1.3.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<!-- Sliding effect -->
	<?php echo '<script'; ?>
 src="js/slide.js" type="text/javascript"><?php echo '</script'; ?>
>	

<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />

<!-- stylesheets -->
  	<link rel="stylesheet" href="css/loginstyle.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/loginslide.css" type="text/css" media="screen" />


<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/css3-mediaqueries.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/fwslider.js"><?php echo '</script'; ?>
>
<!--end slider -->

<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
> <!-- Modernizr -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-hover-effect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">



//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
<?php echo '</script'; ?>
>
<!-- Add fancyBox main JS and CSS files -->
<?php echo '<script'; ?>
 src="js/jquery.magnific-popup.js" type="text/javascript"><?php echo '</script'; ?>
>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		<?php echo '</script'; ?>
>
<!--nav-->
<?php echo '<script'; ?>
>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
<?php echo '</script'; ?>
>

<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to AW Scarves</h1>
				<h2></h2>		
				<p class="grey">We are strategy cooperation partner of famous internationally trusted logistic service providers such as DHL and Fedex. So we can use a lowest shipping cost to reach worldwide(more than 200 countries) in a shortest period. And we provide variety of payment methods such as Paypal, Credit Card, Bank Transfer and so on. </p>
				
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="login_action.php" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="register.php" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->				

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register </a>
				
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	

</div> <!--panel -->





<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt="" /></a>
		</div>		
	<div class="cssmenu">
		<ul>
		   <li class="active"><a href="index.php">Home</a></li>
		   <li><a href="season.php">By Season</a>
		    <ul> 
		    	<li class="has-sub"><a href="christmas.php"></a>Christmas</li>
		         <li class="has-sub"><a href="summer.php"></a>Summer</li>
		         <li class="has-sub"><a href="winter.php"></a>Winter</li>
		      </ul>
		      </li>

		    <li><a href="style.php">By Style</a>
		      <ul>
		         <li class="has-sub"><a href="infinity.php"></a>Infinity</li>
		         <li class="has-sub"><a href="men.php"></a>Men</li>
		         <li class="has-sub"><a href="pashmina.php"></a>Pashmina</li>
		         <li class="has-sub"><a href="square.php"></a>Square</li>
		         <li class="has-sub"><a href="bordered.php"></a>Bordered</li>
		         <li class="has-sub"><a href="ordinary.php"></a>Ordinary</li>
		         <li class="has-sub"><a href="beach.php"></a>Beach</li>
		      </ul>
		   </li>
		    <li><a href="colour.php">By Colour</a>
		      <ul>
		         <li class="has-sub"><a href="red.php"></a>Red</li>
		         <li class="has-sub"><a href="blue.php"></a>Blue</li>
		         <li class="has-sub"><a href="yellow.php"></a>Yellow</li>
		         <li class="has-sub"><a href="white.php"></a>White</li>
		         <li class="has-sub"><a href="black.php"></a>Black</li>
		         <li class="has-sub"><a href="green"></a>Green</li>
		         <li class="has-sub"><a href="full.php"></a>Full</li>
		         <li class="has-sub"><a href="gray.php"></a>Gray</li>
		      </ul>
		   </li>
		   <li><a href="pattern.php">By Pattern</a>  <!--staff.html"-->
		   	 <ul>
		         <li class="has-sub"><a href="animalprint.php"></a>Animal Print</li>
		         <li class="has-sub"><a href="floralprint.php"></a>Floral Print</li>

		         <li class="has-sub"><a href="geometricpatterns.php"></a>Geometric Patterns</li>
		         <li class="has-sub"><a href="bohemianpatterns.php"></a>Bohemian Patterns</li>
		         <li class="has-sub"><a href="skullprint.php"></a>Skull Print</li>
		         <li class="has-sub"><a href="solidcolour.php"></a>Solid Colour</li>
		         <li class="has-sub"><a href="dots.php'"></a>Dots</li>
		         <li class="has-sub"><a href="starspattern.php"></a>Stars Pattern</li>
		         <li class="has-sub"><a href="othersprint.php"></a>Others Print</li>
		      </ul>
		      </li>
		   <li><a href="material.php">By Material</a><!--blog.html-->
		   <ul>
		         <li class="has-sub"><a href="cashmere.php"></a>Cashmere</li>
		         <li class="has-sub"><a href="polyester.php"></a>Polyester</li>
		         <li class="has-sub"><a href="silk.php"></a>Silk</li>
		         <li class="has-sub"><a href="voile.php"></a>Voile</li>
		         <li class="has-sub"><a href="wool.php"></a>Wool</li>
		         <li class="has-sub"><a href="yarn.php"></a>Yarn</li>
		      </ul>
		   </li>
		<li class="last"><a href="contact.php">Contact</a></li><!--contact.html-->
		 <div class="clear"></div>
		 </ul>
	</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
					   <li><a href="index.php">Home</a></li><!--index.html-->
					   <li><a href="style.php">By Style</a></li>
					   <li><a href="season.php">By Season</a></li>
			           <li><a href="pattern.php">By Pattern</a></li>
					   <li class="has-sub"><a href="material.php">By Material</a></li><!--index.html-->
					   <li><a href="feature.html">About Us</a></li><!--feature.html-->
					   <li><a href="blog.html">Site Map</a></li><!--blog.html-->
					   <li class="last"><a href="contact.html">Contact</a></li><!--contact.html-->
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	<div class="clear"></div>
	</div>
	

	

</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-25 14:45:55
         compiled from "templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_547496232161f8_37824701')) {function content_547496232161f8_37824701($_smarty_tpl) {?><!-- start footer  -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h2>Customer Services</h2>
				<ul class="f_nav1">
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="returns.php"></a></li>
					<li><a href="sitemap.php"></a></li>
					<li><a href="about.php"></a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h2>AW Info</h2>
				<ul class="f_nav1">
					<li><a href="">Our Products</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
			
      <div class="span1_of_4">
        <h2>Stay in touch</h2>
        <ul class="f_nav1">
          <li><a href="https://www.facebook.com/pages/Hip-Angels/1513155588947132">Find Us on Facebook</a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
        </ul>
      </div>
			<div class="span1_of_4">
				<h2>Happy to Help</h2>
				<p class="f_para">Our team will provide the best service for you</p>
				<div class="search">
		    		<form>
		    			<input type="text" value="" placeholder="search...">
		    			<input type="submit" value="">
		    		</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer_btm">
		
	</div>
</div>
</div>



<?php }} ?>
