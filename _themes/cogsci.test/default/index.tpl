<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  {include file="../../../shared/templates/_head.tpl"}
  {$pageinfo->head}
  
  <link rel="stylesheet" href="{$pageinfo->cssurl}/PixelGreen.css" type="text/css" />
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

  {include file="header.tpl"}
  
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">
  {include file="sidebar.tpl"}
  {include file="content.tpl"}
	<!-- content-wrap ends here -->		
	</div></div>
  
  {include file="footer.tpl"}
  
<!-- wrap ends here -->
</div>
  {include file="counter.tpl"}
</body>
</html>
