<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 15:55:05
         compiled from "templates/floralprint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1956912282546382d95513b0-11335089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbe8a06f1b6a70bff835a6d2d48d9e866f03c3b' => 
    array (
      0 => 'templates/floralprint.tpl',
      1 => 1415807319,
      2 => 'file',
    ),
    '1776cec8fff2d97b194b492625df29bd3498d23b' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1415807304,
      2 => 'file',
    ),
    'a6f8c232656d096666672f89e92bb9f804503751' => 
    array (
      0 => 'templates/layout_blocks.tpl',
      1 => 1415805788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956912282546382d95513b0-11335089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546382d95fd8f7_08264315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546382d95fd8f7_08264315')) {function content_546382d95fd8f7_08264315($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  
<meta charset="utf-8">
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"><?php echo '</script'; ?>
>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="thumbelina.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="thumbelina.js"><?php echo '</script'; ?>
>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="menu/js/stmenu.js"><?php echo '</script'; ?>
>

</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >
<div id="xyz_main">


<body>
<div id="header">
<div id="info"><img src="images/info.png"></div>
<div id="logo"><a href="index.php"><img src="images/logo.png"></span></a></div>
<!-- My account/Currency -->
<ul id="login">
<div class="create_account">
<li><a href="#"><p>My Account</p></a>
<ul class="sub-login">
<li>
</li>
<a href="login.php"><ps>Longin</ps></a>
</li>
<li>
<a href="register.php"><ps>Register</ps></a>
</li>
</ul>
</li>
<li><a href="#"><p>Currency</p></a>
<ul class="sub-login">
<li>
<a href="sterling.php"><ps>£-Sterling</ps></a>
</li>
<li>
<a href="euros.ph"><ps>€-Euros</ps></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
<!-- header/menu--> 
<div id='cssmenu'>
<ul>
<li><a href="index.php">Home</span></a></li>
<li class='active has-sub'><a href="style.php"><span>By Style</span></a>
<ul>
<li class='last'><a href='infinity.php'><span>Infinity</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='men.php'><span>Men</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='pashmina.php'><span>Pashmina</span></a></li>
<ul>
</ul>
<li class='last'><a href='beach.php'><span>Beach</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='square.php'><span>Square</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='productpage.php'><span>Products</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='bordered.php'><span>Bordered</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='ordinary.php'><span>Ordinary</span></a></li>
</ul>
<li class='active has-sub'><a href='season.php'><span>By Season</span></a>
<ul>
<li class='last'><a href='winter.php'><span>Winter</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='summer.php'><span>Summer</span></a></li>
<ul>
</ul>
<li class='last'><a href='christmas.php'><span>Christmas</span></a></li>
</ul>
<li class='active has-sub'><a href='pattern.php'><span>By Pattern</span></a>
<ul>
<li class='last'><a href='animalprint.php'><span>Animal Print</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='floralprint.php'><span>Floral Print</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='geometricpatterns.php'><span>Geometric Patterns</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='bohemianpatterns.php'><span>Bohemian Patterns</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='skullprint.php'><span>Skull Print</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='othersprint.php'><span>Others Print</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='solidcolour.php'><span>Solid Colour</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='dots.php'><span>Dots</span></a></li>
<ul>
</ul>
<li class='last'><a href='starspattern.php'><span>Stars Pattern</span></a></li>
</ul>
<li class='active has-sub'><a href='material.php'><span>By Material</span></a>
<ul>
<li class='last'><a href='cashmere.php'><span>Cashmere</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='chiffon.php'><span>Chiffon</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='imitatecashmere'><span>Imitate Cashmere</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='polyester.php'><span>Polyester</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='silk.php'><span>Silk</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='voile.php'><span>Voile</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='wool.php'><span>Wool</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='yarn.php'><span>Yarn</span></a></li>
</ul>
<li class='active has-sub'><a href='colour.php'><span>By Colour</span></a>
<ul>
<li class='last'><a href='red.php'><span>Red</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='blue.php'><span>Blue</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='yellow.php'><span>Yellow</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='white.php'><span>White</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='black.php'><span>Black</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='green'><span>Green</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='gray.php'><span>Gray</span></a></li>
<ul>
</li>
</ul>
<li class='last'><a href='full.php'><span>Full</span></a></li>
</ul>
</div>
</div>









 
















<div id="footer">
<div class="column">
<h3>Customer Service</h3>
<ul>
<li><a href="contact.php">Contact</a></li>
<li><a href="returns.php">Returns</a></li>
<li><a href="sitemap.php">Site Map</a></li>
<li><a href="about.php">About Us</a></li>
</ul>
</div>
<div class="column">
<h3>Extras</h3>
<ul>
<li><a href="vouchers.php">Gift Vouchers</a></li>
<li><a href="offers.php">Offers</a></li>
<li><a href="newarrivals.php">New Arrivals</a></li>
</ul>
</div>
<div class="column">
<h3>Fallow Us</h3>
<ul>
<li><a href="https://www.facebook.com/pages/Hip-Angels/1513155588947132">Facebook</a></li>
<li><a href="">Twitter</a></li>
<li><a href="">Google+</a></li>
<li><a href="">Pinterest</a></li>
</ul>
</div>
<div class="column">
<h3>Account</h3>
<ul>
<li><a href="account.php">Account</a></li>
<li><a href="orderhistory.php">Order History</a></li>
<li><a href="newsletter.php">Newsletter</a></li>
</ul> 
</div>
</div> 
<div id="powered">
<a href="http://www.worldpay.com/uk"><img id="worldpay" usemap="" src="images/worldpay.gif" alt="Payments secured and processed by Worldpay" /></a>
</div>

</div>
</body>
</html><?php }} ?>
