<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 16:04:47
         compiled from "templates/colour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71428094654638cc1a2f3b6-36745722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c21384833217a8ae1c7a8157e78bd0fddcf66f' => 
    array (
      0 => 'templates/colour.tpl',
      1 => 1415947456,
      2 => 'file',
    ),
    '5d6bfe2051d66ac920735791a340b5aed8bc0afe' => 
    array (
      0 => 'templates/layout_blocks/layout_blocks_colour.tpl',
      1 => 1415947443,
      2 => 'file',
    ),
    'dd491d73bac1186339951913dd24f9f9b1b5eb62' => 
    array (
      0 => 'templates/single_block_main_header.tpl',
      1 => 1417093656,
      2 => 'file',
    ),
    '138d68e9b6b4ef7d11c03cde27e581d95c1eaaae' => 
    array (
      0 => 'templates/single_block_main_footer.tpl',
      1 => 1417103146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71428094654638cc1a2f3b6-36745722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54638cc1ac32e0_57541078',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54638cc1ac32e0_57541078')) {function content_54638cc1ac32e0_57541078($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  
</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '71428094654638cc1a2f3b6-36745722');
content_54774b9fded716_05121101($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>




 





<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '71428094654638cc1a2f3b6-36745722');
content_54774b9fe0b833_65402172($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 16:04:47
         compiled from "templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54774b9fded716_05121101')) {function content_54774b9fded716_05121101($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

   <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>


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







<div class="header_bg">

<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt="" /></a>
		</div>	

	<div id='cssmenu'style="">
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='season.php'><span>By Season</span></a>
      <ul>
         <li><a href='christmas.php'><span>Christmas</span></a></li>
         <li><a href='summer.php'><span>summer</span></a></li>
         <li class='last'><a href='winter.php'><span>Winter</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='style.php'><span>By Style</span></a>
      <ul>
         <li><a href='infinity.php'><span>Infinity</span></a></li>
         <li><a href='pashmina.php'><span>Pashmina</span></a></li>
         <li><a href='square.php'><span>Square</span></a></li>
         <li><a href='bordered.php'><span>Bordered</span></a></li>
         <li><a href='ordinary.php'><span>Ordinary</span></a></li>
         <li><a href='beach.php'><span>Beach</span></a></li>
		 <li class='last'><a href='men.php'><span>Men</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='colour.php'><span>By Colour</span></a>
      <ul>
         <li><a href='red.php'><span>Red</span></a></li>
         <li><a href='blue.php'><span>Blue</span></a></li>
         <li><a href='yellow.php'><span>Yellow</span></a></li>
         <li><a href='white.php'><span>White</span></a></li>
         <li><a href='black.php'><span>Black</span></a></li>
         <li><a href='green.php'><span>Green</span></a></li>
          <li><a href='full.php'><span>Full</span></a></li>
		 <li class='last'><a href='gray.php'><span>Gray</span></a></li>
      </ul>
   </li>
    <li class='has-sub'><a href='pattern.php'><span>By Pattern</span></a>
      <ul>
         <li><a href='animalprint.php'><span>Animal Print</span></a></li>
         <li><a href='floralprint.php'><span>Floral Print</span></a></li>
         <li><a href='geometricpatterns.php'><span>Geometric Patterns</span></a></li>
         <li><a href='bohemianpatterns.php'><span>Bohemian Patterns</span></a></li>
         <li><a href='skullprint.php'><span>Skull Print</span></a></li>
         <li><a href='solidcolour.php'><span>Solid Colour</span></a></li>
          <li><a href='dots.php'><span>Dots</span></a></li>
           <li><a href='starspattern.php'><span>Stars Pattern</span></a></li>
		 <li class='last'><a href='othersprint.php'><span>Others Print</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='material.php'><span>By Material</span></a>
      <ul>
         <li><a href='cashmere.php'><span>Cashmere</span></a></li>
         <li><a href='polyester.php'><span>Polyester</span></a></li>
         <li><a href='silk.php'><span>Silk</span></a></li>
         <li><a href='voile.php'><span>Voile</span></a></li>
         <li><a href='wool.php'><span>Wool</span></a></li>
		 <li class='last'><a href='yarn.php'><span>Yarn</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
</ul>
</div>
	
<!--<div class="span1_of_4" style="margin-left:495px;">
			        <div class="search" style="margin-right:">
		    		<form>
		    		<input type="text" value="" placeholder="AW Search...">
		    		<input type="submit" value="">
		    		</form>
				</div>
			</div>-->
	

</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 16:04:47
         compiled from "templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54774b9fe0b833_65402172')) {function content_54774b9fe0b833_65402172($_smarty_tpl) {?><!-- start footer  -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h2>Customer Services</h2>
				<ul class="f_nav1">
					<li><a href="contact.php">Contact Us</a></li>
					<br>
					<li><a href="account.php">Your Account</a></li>
				<br>
					<li><a href=""></a></li>
					<br>
					<li><a href=""></a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h2>AW Info</h2>
				<ul class="f_nav1">
					<li><a href="sitemap.php">Site Map</a></li>
					<br>
					<li><a href="about.php">About Us</a></li>
					<br>
					<li><a href="newsletter.php">Newsletter</a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
			
      <div class="span1_of_4">
        <h2>Stay in touch</h2>
        <ul class="f_nav1">
          <li><a href="https://www.facebook.com/pages/Hip-Angels/1513155588947132">Facebook</a></li>
          <br>
          <li><a href="">Twitter</a></li>
          <br>
          <li><a href="">Instagram</a></li>
          <br>
          <li><a href="">Google+</a></li>
          <br>
          <li><a href="">Pinterest</a></li>
        </ul>
      </div>


       <div class="span1_of_4">
        <h2>Orders and Returns</h2>
        <ul class="f_nav1">
          <li><a href="returns.php">Retuns</a></li>
         <br>
          <li><a href="orderhistory.php">Order History</a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
        </ul>
      </div>
			<!--<div class="span1_of_4">
				<h2>Happy to Help</h2>
				<p class="f_para">Our team will provide the best service for you</p>
				<div class="search">
		    		<form>
		    			<input type="text" value="" placeholder="search...">
		    			<input type="submit" value="">
		    		</form>
				</div>
			</div> -->
			<div class="clear"></div>
		</div>
		<div class="footer_btm">
		
	</div>
</div>
</div>



<?php }} ?>
