<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 17:12:50
         compiled from "./templates/productLists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6706125715464561883ac14-07895363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3d2217f329b34a0721e58596864bec7a965086' => 
    array (
      0 => './templates/productLists.tpl',
      1 => 1417108368,
      2 => 'file',
    ),
    'cdfecde7848a5c28b46ce6cb837aca1f4646f9ff' => 
    array (
      0 => './templates/layout_blocks/layout_blocks_product_list.tpl',
      1 => 1417107377,
      2 => 'file',
    ),
    '621fa4f512f2f67a4aa916e7f00eaea49af28096' => 
    array (
      0 => './templates/single_block_header_files.tpl',
      1 => 1416575011,
      2 => 'file',
    ),
    'dd491d73bac1186339951913dd24f9f9b1b5eb62' => 
    array (
      0 => './templates/single_block_main_header.tpl',
      1 => 1417093656,
      2 => 'file',
    ),
    '138d68e9b6b4ef7d11c03cde27e581d95c1eaaae' => 
    array (
      0 => './templates/single_block_main_footer.tpl',
      1 => 1417103146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6706125715464561883ac14-07895363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54645618989a15_74387806',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54645618989a15_74387806')) {function content_54645618989a15_74387806($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  

<?php /*  Call merged included template "single_block_header_files.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_header_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6706125715464561883ac14-07895363');
content_54775b92d57967_72925967($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_header_files.tpl" */?>

  

   <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.navgoco.min.js"><?php echo '</script'; ?>
>

   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>

   <?php echo '<script'; ?>
 type="text/javascript" src="js/perfect-scrollbar.js"><?php echo '</script'; ?>
>

   <link href="js/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
   
  <?php echo '<script'; ?>
 type="text/javascript" src="js/sidePanel.js"><?php echo '</script'; ?>
>
   
  <?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>

  <link href="css/product_list.css" rel="stylesheet" type="text/css"/>
   

</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6706125715464561883ac14-07895363');
content_54775b92d6eee8_17509065($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>





<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="ser-main">
       
      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;width:220px;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX2" style="position:relative; left:0px; top:0px;width:215px;height:774px;overflow:hiddenx;" > 
            <div class="Normal-PC Style_sideInfoPan2">Shopping Options</div>
      
          
             <div class="Cursor_Pointer" id="expandAll" style='position:absolute;left:2px; top:0px;;height:0px;' ><big>+</big></div>
          
                
             <div class="Cursor_Pointer" id="collapseAll" style='position:absolute;left:20px; top:-2px;;height:0px;' ><big>-</big></div>
       
<ul id="demo1" class="nav">
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_Panel_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<li><a href='#' class='Style_sideInfoPan1' ><?php echo $_smarty_tpl->tpl_vars['row']->value['cat_Name'];?>
</a>
		<ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<li  ><a  href="<?php echo $_smarty_tpl->tpl_vars['value']->value['href'];?>
" onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['value']->value['href'];?>
")' class='Style_sideInfoPan3'> <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
    <?php } ?>

		</ul>
	</li>
  <?php } ?>
  
	<li><a href='#' class='' > Shop By Colour</a>
		<ul>
        <div id=""  style="position:relative; ;width:120px;" > 
        	<table border="0" cellspacing="4" cellpadding="0" bgcolor="#fff">
          
         
          <tr>
          <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['color_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
      
              <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0) {?>
                 <tr>
              <?php }?>
            	
            	<td bgcolor="#<?php echo $_smarty_tpl->tpl_vars['row']->value['colourHash'];?>
" class="SelectedColour" >
            	<div class="Cursor_Pointer"  onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['row']->value['href'];?>
")'>
            	<img src="images/blanka.gif" width="20" height="20">
            	</div>
            	</td>
    
              <?php } ?>
              </tr>
              
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['color_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
               <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0) {?>
                 </tr>
               <?php }?>         
          
          <?php } ?>
          
          
          </tr></tr>
        	</table>
     </div>
		</ul>
	</li>  
  
  

</ul>          
          
          
</div>    
</div>
</div>
</div>

    
          
          
   <!--       
      xxxxxxxxxxx
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_Panel_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <br>o<?php echo $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names'];?>
o<br> 
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
       <br><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
:::<br>
      <?php } ?>
       i
         <?php echo $_smarty_tpl->tpl_vars['row']->value['href'];?>

      <?php } ?>
          
  -->        
          
          
     </div> 
     





<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="ser-main">


     <div id="outsideSweetsBox" class="FrontshopAXX " style="position:relative; left:220px; top:0px;width:733px;" > 
 
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <!--
            <option <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_GET['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
        -->
        
          <div class='sweetBox' style="position:relative; width:220px;height:370px; z-index:0; border:1px solid ;border-color: #cfcfcf">

               <div id="ShowPriceI_0" style="position:absolute;width:135px;left:0px;height:45px;top:0px;border:0px solid black;z-index:11">
          <img class="" id='sideImgP_0' src="http://mypickandmix.com/aw/hip/images/sidePriceBanHip.gif" style="border:0px solid blue;border-color:#808080;width:95px;height:90px;" > 
      </div>
      
         <div id="ShowPriceT_0"  class="rotateP"  style="position:absolute;width:75px;left:2px;height:45px;top:16px;border:0px solid pink;z-index:11">
              <div class="Normal-PC" >
    <span class="Style_productPriceBanner" title="" id='' ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Each_Text'];?>
</span></div> </div>
      
    <div id="" class="boxForshopPage" style="position:absolute; left:0px; top:0px;width:180px; height:336px " > </div> 
        <div class="Cursor_Pointer" style="position:absolute; left:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_left'];?>
px; top:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_top']+12;?>
px; width:80px; height:80px ;z-index:10">
        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
" onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
")' title=""><img  src="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Main_Image_Key'];?>
" title="" width="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Height'];?>
" border="0"  alt=""></a></div>
    
                                                 
  
   
        <div id="" style="position:absolute; left:10px; top:230px ;width:200px; ">
      <div class="Normal-PC">
      <span class="text_shop2 Style_productName" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
</span></div> </div>  
      
        <div id="" style="position:absolute; left:2px; top:280px ;width:176px; ">
      <div class="Normal-PC">
      <span class="StyleRancho2" title="" id="" ></span></div> </div> 
      
       
         <div id="" style="position:absolute; left:10px; top:290px ;width:200px;display:nonex ">
      <div class="Normal-PC">
      <span class="Style_productPrice" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Description'];?>
</span></div> </div>            
     
     
 
     
              
           
  
            <div id="" class="letterbox" style="position:absolute; left:64px; top:325px; width:35px;height:22px; z-index:199;">     
           <input class="Noborder" name=""  onKeyPress="return numbersonly(this, event)"  id="inputbox_amount<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
"    type="text" class="" maxlength=3 value ="1" 
        style="position:absolute;width:30px;left:2px;top:2px;z-index:210">          
        </div>  
        
        
        
          <div  id= ""  OnClick="javascript:BuyMeNow(<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
 , '<?php echo '<?'; ?>
echo($info_ID)<?php echo '?>'; ?>
' , '<?php echo '<?'; ?>
echo($info_TextHead)<?php echo '?>'; ?>
' , '<?php echo '<?'; ?>
echo($info_ImageSmall)<?php echo '?>'; ?>
' )"
          onMouseOver="javascript:$('#RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
').attr('src','http://www.mypickandmix.com/shop/images/buyNowB.gif'); " onMouseOut="javascript:$('#RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
').attr('src','http://www.mypickandmix.com/shop/images/buyNowA.gif');" class="Cursor_Pointer" 
          style="position:absolute; left:102px; top:318px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
        
        
        
     <!--   <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
 -->

        <?php } ?> 
   </div>
</div>
</div>
</div>
</div>


</div>


<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6706125715464561883ac14-07895363');
content_54775b92dfb214_77756516($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>


</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 17:12:50
         compiled from "./templates/single_block_header_files.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54775b92d57967_72925967')) {function content_54775b92d57967_72925967($_smarty_tpl) {?>

 
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 17:12:50
         compiled from "./templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54775b92d6eee8_17509065')) {function content_54775b92d6eee8_17509065($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-27 17:12:50
         compiled from "./templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54775b92dfb214_77756516')) {function content_54775b92dfb214_77756516($_smarty_tpl) {?><!-- start footer  -->
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
