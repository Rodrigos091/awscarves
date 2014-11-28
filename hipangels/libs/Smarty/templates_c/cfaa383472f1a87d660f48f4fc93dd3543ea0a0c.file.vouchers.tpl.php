<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 11:51:43
         compiled from "templates/vouchers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169302196854638082788dc5-37384853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfaa383472f1a87d660f48f4fc93dd3543ea0a0c' => 
    array (
      0 => 'templates/vouchers.tpl',
      1 => 1415883018,
      2 => 'file',
    ),
    '9c571dc44b7e9bec262c7313d044b6f15d13d15e' => 
    array (
      0 => 'templates/layout_blocks/layout_blocks_vouchers.tpl',
      1 => 1415883012,
      2 => 'file',
    ),
    'dd491d73bac1186339951913dd24f9f9b1b5eb62' => 
    array (
      0 => 'templates/single_block_main_header.tpl',
      1 => 1416479413,
      2 => 'file',
    ),
    '138d68e9b6b4ef7d11c03cde27e581d95c1eaaae' => 
    array (
      0 => 'templates/single_block_main_footer.tpl',
      1 => 1416484293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169302196854638082788dc5-37384853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54638082789a69_35527322',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54638082789a69_35527322')) {function content_54638082789a69_35527322($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  
</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '169302196854638082788dc5-37384853');
content_546dd5d001b888_78871490($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>




 





<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '169302196854638082788dc5-37384853');
content_546dd5d0035cb0_73743024($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 11:51:44
         compiled from "templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546dd5d001b888_78871490')) {function content_546dd5d001b888_78871490($_smarty_tpl) {?><link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="thumbelina.css" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css" />

<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />

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
<?php echo '<script'; ?>
 type="text/javascript" src="/js/bootstrap.js"><?php echo '</script'; ?>
>





<div class="header">
<div id='logo' alt='logo' style=" position:absolute; left:0px;top:60px  width:236px;height:94"><a href="index.php"><img src="images/logo.png"></a></div>
<div id="info_phone" style='position:absolute; left:500px;top:5px'> <h2>TEL: +44 (0)114 2729165 </h2></div>
<div id="info_mail" style='position:absolute; left:730px;top:5px'><h2>sales@aw.com</h2> </div>

<div class="search" style= "position:absolute; left:900px;top:98px; border:0px solid;">



<div class="span6" style=''>
                            
<!-- Search -->
	                            
<div class="search">
<div class="qs_s">

<form method="get" action="/search">
<input type="text" name="query" id="query" placeholder="Search AW Scarves&hellip;" autocomplete="off" value="">
</form>
</div>
</div>
</div>
<!-- End class="search" -->

</div>
</div>






<style type="text/css">	
  #xyz_mainSS {
    width: 140px;
    text-align: left;
    position: relative;
    top: 0px;
    left: 50%;
    margin-left: 486px;
}
</style>

<!-- header/menu--> 
<div id='cssmenu' style="position: relative; z-index:9999">
<ul>
<li><a href="index.php">Home</a></li>
<li class='active has-sub'><a href="style.php">By Style</a>
<ul>
<li class='last'><a href='infinity.php'>Infinity</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='men.php'>Men</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='pashmina.php'>Pashmina</a></li>
<ul>
</ul>
<li class='last'><a href='beach.php'>Beach</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='square.php'>Square</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='bordered.php'>Bordered</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='ordinary.php'>Ordinary</a></li>
</ul>
<li class='active has-sub'><a href='season.php'>By Season</a>
<ul>
<li class='last'><a href='winter.php'>Winter</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='summer.php'>Summer</a></li>
<ul>
</ul>
<li class='last'><a href='christmas.php'>Christmas</a></li>
</ul>
<li class='active has-sub'><a href='pattern.php'>By Pattern</a>
<ul>
<li class='last'><a href='animalprint.php'>Animal Print</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='floralprint.php'>Floral Print</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='geometricpatterns.php'>Geometric Patterns</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='bohemianpatterns.php'>Bohemian Patterns</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='skullprint.php'>Skull Print</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='othersprint.php'>Others Print</a></li>
<ul>
</li>
</ul>
<li class='last'><a href='solidcolour.php'>Solid Colour</span></a></li>
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
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 11:51:44
         compiled from "templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546dd5d0035cb0_73743024')) {function content_546dd5d0035cb0_73743024($_smarty_tpl) {?>

<!--main_footer-->
<div class=''>
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
<li><a href="newsletter.php">Newsletter</a></li>
</ul>
</div>
<div class="column">
<h3>Stay in touch</h3>
<ul>
<li><a href="https://www.facebook.com/pages/Hip-Angels/1513155588947132">Facebook</a></li>
<li><a href="">Twitter</a></li>
<li><a href="">Google+</a></li>
<li><a href="">Pinterest</a></li>
</ul>
</div>
</div> 
</div>


<?php }} ?>
