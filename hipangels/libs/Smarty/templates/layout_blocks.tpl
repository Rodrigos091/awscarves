{config_load file="setting.conf"}
<html>
<head>
  <title>{#pageTitle#}</title>
  {block name=head}{/block}
</head>
<body bgcolor="{#bodyColor#}" >
<div id="xyz_main">

{block name=main_header}
include name=main_header.tpl {/block}

{block name=productLeftSidePanel}{/block}

{block name=productlist}{/block}

{block name=about}{/block}


{block name=body} 

{/block}














{block name=footer}
include name=footer.tpl {/block}
</div>
</body>
</html>