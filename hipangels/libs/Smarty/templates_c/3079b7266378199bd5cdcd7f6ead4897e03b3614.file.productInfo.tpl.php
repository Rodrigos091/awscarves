<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-28 10:57:26
         compiled from "templates/productInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12158137595464580ec99858-60457724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3079b7266378199bd5cdcd7f6ead4897e03b3614' => 
    array (
      0 => 'templates/productInfo.tpl',
      1 => 1417172241,
      2 => 'file',
    ),
    '5bc675560960e7d79cfb8a6901f1d908fb578eac' => 
    array (
      0 => 'templates/layout_blocks/layout_blocks_product_info.tpl',
      1 => 1417107375,
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
  'nocache_hash' => '12158137595464580ec99858-60457724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5464580edc45d8_00088149',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5464580edc45d8_00088149')) {function content_5464580edc45d8_00088149($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  

  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  
  <link href="css/product_info.css" rel="stylesheet" type="text/css"/>
   
  <?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
   
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.navgoco.min.js"><?php echo '</script'; ?>
>
   
   <!--
   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>
   -->

   
   <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.elevatezoom.js"><?php echo '</script'; ?>
>
      
   <?php echo '<script'; ?>
 type="text/javascript" src="js/productInfo.js"><?php echo '</script'; ?>
>
   
   <!--<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'> -->
   <?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>
   

</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >



<?php /*  Call merged included template "single_block_main_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12158137595464580ec99858-60457724');
content_5478551623f652_38804424($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_header.tpl" */?>





    

<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="ser-main">

      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;;height:0px; z-index: 9" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:0px;height:430px;overflow:hiddenx" > 
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
        <div class="Cursor_Pointer" style="position:relative; left:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_left'];?>
px; top:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_top']+12;?>
px; width:80px; height:315px ;z-index:10">
        <a title=""><img  id='zoom_01' src="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Main_Image_Key'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Filename'];?>
" title="" width="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Height'];?>
" border="0"  alt=""></a></div>
 <?php } ?> 


 <div class='Normal-PL Style_productPrice' style='position:relative;left:10px;top:-6px'  > More views</div>  
    <hr>  
 
 <div class='smallImgBoxWapper' id="gallery_01">  
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_extra_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
<!-- 
              <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index:10">
        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
" onClick='changeImage("<?php echo $_smarty_tpl->tpl_vars['row']->value['url_large'];?>
")' title=""><img  src="http://www.mypickandmix.com/aw/hip/_code/showimg.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" title="" width="70" height="70" border="0"  alt=""></a></div>
-->
    <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index 9">

         <a href="#" data-image="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['url_large'];?>
" > 
         <img id="img_01" src="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" width="70" height="70" /> 
         </a>
   </div>

  <?php } ?> 
 </div>
 
 
 
   
   
     </div> 
     </div>  
  </div>
  </div>
</div>
</div>

   
    
<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="ser-main">

     <div id="outsideScarvesBox" class="FrontshopAXX " style="position:relative; left:0px; top:0px; z-index: 0" > 
 
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

        
          <div class='' style="position:relative; height:430px; width:563px; z-index:20; border:0px solid ;border-color: #cfcfcf">

         <div id="" style="position:absolute; left:0px; top:10px;width:563px;  ">
      <div class="Normal-PC">
      <span class="Style_productName" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
</span></div> </div>  
     
  
         <div id="" style="position:absolute; left:-5px; top:70px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Product Code:<span class="Style_productCodeB"><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Code'];?>
 </span></span></div> </div>  

        <div id="" style="position:absolute; left:-5px; top:90px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Availability:<span class="Style_productCodeB"><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Availability'];?>
 </span></span></div> </div>  


         <div id="" style="position:absolute; left:5px; top:70px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Price each:<span class="Style_productCodeB"> <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Each_Text'];?>
 </span></span></div> </div>  

        <div id="" style="position:absolute; left:5px; top:90px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Pack Size:<span class="Style_productCodeB"> <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Description'];?>
 </span></span></div> </div>  


        <div id="" style="position:absolute; left:433px; top:170px;width:100px; ">
        <div class="Normal-PC Style_CONFIDENCE"  >SHOP IN CONFIDENCE</div>
         <img id="img_01" src="http://www.positivessl.com/images-new/PossitiveSSL_tl_white2.gif"  /> 
        </div>
      
      
      
  <div id="" style="position:absolute; left:100px; top:140px;width:363px; ">         
<hr>
  </div>    
     
         <div id="" style="position:absolute; left:52px; top:150px;width:563px;  ">
      <div class="Normal-PL">
      <span class="Style_overview" title="" id="" >Quick Overview</span></div> </div>                                                   
  
   
        <div id="" style="position:absolute; left:30px; top:180px;width:563px;  ">
        
        <div class="Normal-PL">
        
        <ul>
           <?php  $_smarty_tpl->tpl_vars['rowB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowB']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_overview']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowB']->key => $_smarty_tpl->tpl_vars['rowB']->value) {
$_smarty_tpl->tpl_vars['rowB']->_loop = true;
?>
            <li><span class='Style_productCodeC' style='color:#<?php echo $_smarty_tpl->tpl_vars['rowB']->value['colour'];?>
' ><?php echo $_smarty_tpl->tpl_vars['rowB']->value['text'];?>
</span></li>
           <?php } ?>
        </ul>  
       </div> 
    </div>
 
           
           
    <div id="" style="position:absolute; left:230px; top:380px;  ">
            <div id="" class="letterbox" style="position:absolute; left:0px; top:5px; width:35px;height:22px; z-index:199;">     
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
          style="position:absolute; left:50px; top:0px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
     </div>   
        
        
     <!--   <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
 -->

        <?php } ?> 
   </div>
   </div>
   </div>
   </div>
   </div>


   




<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="ser-main">
 
 <div id="" class="FrontshopAXX " style="position:relative; left:0px; top:5px;width:973px;height:400px;  ">
 
<div  class='tab-container myTabs ' style='display:nonexxx' name='name'>
 <ul id="tabs" class="nav" '>
   <li onClick='newTab(1)' class='Cursor_Pointer' ><a >Product Description</a></li>
   <li onClick='newTab(2)' class='Cursor_Pointer'><a >Tips</a></li>
   <li onClick='newTab(5)' class='Cursor_Pointer' ><a >Q and A</a></li>
   <li onClick='newTab(3)' class='Cursor_Pointer'><a >Shipping Information</a></li>
   <li onClick='newTab(4)' class='Cursor_Pointer'><a >Terms & Conditions</a></li>
 </ul>
 <div id="content"  class='Style_productCodeD' style='overflow:hidden;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom:20px;border:1px solid ;border-color: #cfcfcf;display:nonexxx'> 
  <div id="tab1" >
   <h2><?php echo strip_tags($_smarty_tpl->tpl_vars['row']->value['Product_Name']);?>
</h2>
   
   
    <br><br>
   
   
    <?php echo $_smarty_tpl->tpl_vars['tab1_text']->value;?>

 

   
   
  </p>
  



   <p></p>
  </div>
  
  
   <div id="tab2" style='display:none'>
   <h2>Useful Tips</h2>

       <div  style="position:relative; left:640px; top:-80px; z-order:10;height:0px">
    <img src='http://3.bp.blogspot.com/-woXZaTZPBwo/UaVi0PhQ8zI/AAAAAAAAAQo/ejuh4RAS_Ek/s1600/useful-tips.png'>
    </div>

   <p>
   
    <?php echo $_smarty_tpl->tpl_vars['tab2_text']->value;?>

   
 
  </pre>

  </div>
  <div id="tab3" style='display:none'>
  <h2>Delivery</h2>
   
       <div  style="position:relative; left:600px; top:-78px; z-order:10;height:0px;">
    <img src='http://gonereading.com/newshop/wp-content/uploads/2012/01/Shipping-Information.jpg'>
    </div>


   <br><br><b>Despatch</b>
   <br>
   <br>All Scarves are despatched safely and securely.
    <br>    
     <br>All Scarves will include a sales summary of your purchase.
     <br>Weekend orders will be processed on the next working day.
     <br>   
    <br><b>Packing</b>
    <br>All Scarves are shipped in air tight packaging to keep them freash for longer.
    <br>    
     <br><b>Delivery</b>
     <br>All Scarves are despatched from our UK distribution centre.
  
      <br>We use respected couriers only - Royal Mail, City Link, Myhermes.

      <br>All orders will be processed and shipped within 48hrs of confirmed payment.
    
        <br>Larger & more expensive orders will be sent through a trackable service.

        <br>All orders will be despatched to the address held on eBay only.
        <br>
 

   
   
  </p>
  



   <p></p>  </div>
  
  
  
    <div id="tab4" style='display:none'>
   <h2>TERMS & CONDITIONS</h2>
Please read our terms of sale prior to bidding. This is important and will ensures you are happy with our terms. 
<br>We want your shopping experience with us to be a happy one.
<br>
<br><b>Payment</b>
<br>Please note once you click `buy it now` immediate Paypal payment is required.
<br>
<br><b>Packaging</b>
<br>All our Scarves are packaged as carefully as possible.
<br>
<br><b>Postage & Packing</b>
<br>We try to make sure the postage costs are the best on eBay
<br>
<br>Postage & Packing costs include the following:
<br>
<br>    Cost of the postage - Stamps!
<br>
<br>    Packaging costs including bags, boxes, and other packing materials 
<br>
 <br>   Cost of picking and preparing your order, well we are my pick and mix
<br>


    <b>RETURNS POLICY</b>
<br>
<br>All products and Scarves are individually inspected before being dispatched, to ensure items are  sent out in perfect condition.
<br>In the unlikely event that your Scarves are not right, please just return them to us within 7 days of receipt in its original condition. Upon inspection, we will be happy to replace, or refund you.
<br>
<br>All returned items or Scarves must be authorised and sent back to us with proof of delivery. Any return postage costs will be refunded at our discretion only
<br>
<br>We want to ensure you are always happy when shopping with us.<br>To ensure this, we offer our <big><strong><b><i>absolute satisfaction</b></i></strong></big> guarantee where you can return any unopened item or Scarves within 14 days of the date of your receipt of your order. 
<br> <br>
  </div>

    <div id="tab5" style='display:none'>

   
   <h2>Q & A</h2>
   
         <div  style="position:relative; left:700px; top:-20px; z-order:10;height:0px">
    <img src='http://www.mypickandmix.com/ebayTesting/images/qanda.jpg'>
    </div>
<br>
<?php echo $_smarty_tpl->tpl_vars['tab3_text']->value;?>
 
  

    
 </div>
</div>
</div>
   </div>
   </div>
   </div>
   


</div>



</body>
</html>



<?php /*  Call merged included template "single_block_main_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("single_block_main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12158137595464580ec99858-60457724');
content_5478551630d711_64201030($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "single_block_main_footer.tpl" */?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-28 10:57:26
         compiled from "templates/single_block_main_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5478551623f652_38804424')) {function content_5478551623f652_38804424($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-28 10:57:26
         compiled from "templates/single_block_main_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5478551630d711_64201030')) {function content_5478551630d711_64201030($_smarty_tpl) {?><!-- start footer  -->
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
