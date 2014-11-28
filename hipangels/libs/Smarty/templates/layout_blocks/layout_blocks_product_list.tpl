 {config_load file="setting.conf"}
<html>
<head>
  <title>{#pageTitle#}</title>
  {block name=main_header_files}{/block}
  {block name=head_productList}{/block}
</head>
<body bgcolor="{#bodyColor#}" >

{block name=main_header}{/block}


{block name=productLeftSidePanel}{/block}

{block name=productlist}{/block}
</div>
{block name=main_footer}{/block}

</body>
</html>