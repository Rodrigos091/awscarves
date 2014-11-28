{extends file="layout_blocks/layout_blocks_contact.tpl"}
{block name=title} About - AW -Scarves{/block}
{block name=body} 
<script src="js/jquery.min.js"></script>
<script>
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
</script>

<!-- start mian -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	 	 <div class="contact">				
					<div class="contact_info">
						<h2 class="style">get in touch</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.4594742876006!2d-1.4853011000000016!3d53.39838974999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879788c07ce4657%3A0xa044c61891c73288!2sSheffield%2C+South+Yorkshire+S3+8AL!5e0!3m2!1sen!2suk!4v1416572421965" width="800" height="600" frameborder="0" style="border:0"></iframe></iframe><br><small><a href=<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.4594742876006!2d-1.4853011000000016!3d53.39838974999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879788c07ce4657%3A0xa044c61891c73288!2sSheffield%2C+South+Yorkshire+S3+8AL!5e0!3m2!1sen!2suk!4v1416572421965" width="400" height="300" frameborder="0" style="border:0"> View Larger Map</a></small>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	 <div class="content">
		 	 	<h2 class="style">Contact Us</h2>
		 	 </div>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clear"> </div>		
			  </div>
		</div>
</div>
</div>


{/block}

{block name=main_header}

{include file="single_block_main_header.tpl"}
{/block}


{block name=main_footer}

{include file="single_block_main_footer.tpl"}
{/block}





