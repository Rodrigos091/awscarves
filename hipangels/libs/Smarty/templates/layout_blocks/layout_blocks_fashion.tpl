 {config_load file="setting.conf"}

<html>
<head>
  <title>{#pageTitle#}</title>
  {block name=head}{/block}
</head>
<body bgcolor="{#bodyColor#}" >

{block name=main_header}{/block}



{block name=body}{/block}

{block name=main_footer}{/block}
</body>
</html>