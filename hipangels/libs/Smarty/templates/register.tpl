{extends file="layout_blocks/layout_blocks_about.tpl"}
{block name=title} About - AW -Scarves{/block}
{block name=body} 

<!--<div class="register_form">	
	<h1>Register</h1>
	<form action="register.php" method="POST">
	<p>
	First Name: <input type="text" name="first_name"
	value=" <?php if ( isset( $_POST[ 'first_name']))
			echo $_POST[ 'first_name' ] ; ?> ">
			
	Last Name: <input type="text" name="last_name"
	value=" <?php if (isset( $_POST[ 'last_name'] ))
			echo $_POST[ 'last_name' ] ; ?> ">
			</p> <p>
	Email Address: <input type="text" name="email"
	value=" <?php if ( isset( $_POST[ 'email' ] ))
			echo $_POST[ 'email' ] ; ?>">
	</p> <p>
	Password: <input type="password" name="pass1"
	value="<?php if (isset( $_POST[ 'pass1'] ))
			echo $_POST[ 'pass1'] ; ?>">
		
	Comfirm password: <input type="password" name="pass2"
	value="<?php if ( isset( $_POST[ 'pass2'] ))
			echo $_POST[ 'pass2'] ; ?>">
			</p> <p>
	<input type="submit" value="Register"> </p>
	</form>
	</div>-->

{/block}

{block name=main_header}

{include file="single_block_main_header.tpl"}
{/block}


{block name=main_footer}

{include file="single_block_main_footer.tpl"}
{/block}














