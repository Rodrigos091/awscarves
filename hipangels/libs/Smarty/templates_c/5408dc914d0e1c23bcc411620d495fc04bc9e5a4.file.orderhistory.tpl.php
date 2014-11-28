<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 15:28:31
         compiled from "templates/orderhistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13067637025463823ec5d001-27513932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5408dc914d0e1c23bcc411620d495fc04bc9e5a4' => 
    array (
      0 => 'templates/orderhistory.tpl',
      1 => 1415884109,
      2 => 'file',
    ),
    'b2bd722189286727382fe614e05fadb3b8d577d2' => 
    array (
      0 => 'templates/layout_blocks/layout_blocks_orderhistory.tpl',
      1 => 1415884105,
      2 => 'file',
    ),
    'dd491d73bac1186339951913dd24f9f9b1b5eb62' => 
    array (
      0 => 'templates/single_block_main_header.tpl',
      1 => 1415973399,
      2 => 'file',
    ),
    '138d68e9b6b4ef7d11c03cde27e581d95c1eaaae' => 
    array (
      0 => 'templates/single_block_main_footer.tpl',
      1 => 1415978222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13067637025463823ec5d001-27513932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5463823ecd2df8_75302594',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5463823ecd2df8_75302594')) {function content_5463823ecd2df8_75302594($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  
</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13067637025463823ec5d001-27513932');
content_54661f9f4a1657_88247590($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>




 





<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13067637025463823ec5d001-27513932');
content_54661f9f4b5fd4_56691731($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 15:28:31
         compiled from "templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54661f9f4a1657_88247590')) {function content_54661f9f4a1657_88247590($_smarty_tpl) {?><link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="thumbelina.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="thumbelina.js"><?php echo '</script'; ?>
>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>




<?php echo '<script'; ?>
 type="text/javascript" src="menu/js/stmenu.js"><?php echo '</script'; ?>
>
<div id="header">
<div id="phone"><img src="images/phone.png"></div>
<div id="envelope"><img src="images/envelope.png"></div>
 <p>+44 (0)114 2729165  &nbsp  &nbsp &nbsp &nbsp &nbsp   &nbsp sales@aw-scarves.com</p>
<div id="logo"><a href="index.php"><img src="images/logo.png"></span></a></div>

<!-- My account/Currency -->
<ul id="login">
<div class="account">
<li><p>My Account</p>
<ul class="sub-login">
<li>
</li>
<!--<div id="try"><a href="login.php"><p>Longin</p></a></div>-->
</li>
<li>
<!--<a href="register.php"><p>Register</p></a>-->
</li>
</ul>
</li>
</div>
<div class="currency">
<li><p>Currency</p>
<ul class="sub-login">
<li>
<!--<a href="sterling.php"><p>£-Sterling</p></a>-->
</li>
<li>
<!--<a href="euros.ph"><p>€-Euros</p></a>-->
</li>
</ul>
</li>
</ul>
</div>
</div>
</ul>
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
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 15:28:31
         compiled from "templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54661f9f4b5fd4_56691731')) {function content_54661f9f4b5fd4_56691731($_smarty_tpl) {?>

<!--main_footer-->

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
<div id="powered">
<a href="http://www.worldpay.com/uk"><img id="worldpay" usemap="" src="images/worldpay.gif" alt="Payments secured and processed by Worldpay" /></a> <img src="images/visa_debit.gif"> 
<img src="images/visa_electron.gif">
<img src="images/visa.gif">
<img src="images/maestro.gif">
<img src="images/mastercard.gif">
<a href="https://www.paypal.com/uk/home"><img src="images/paypal.png"></a>

</div>
</div> 


<?php }} ?>
