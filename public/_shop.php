<!doctype=html>
<html>
<head>
<style>
body, html{
	margin: 0;
	padding: 0;
}
</style>
</head>
<body>
<?php
$catname = $_REQUEST['catname'];

if ($catname == ''){
	header('Location: http://google.com');
	exit;
}

echo('<iframe style="position: relative;width: 100%;height: 100%;" src="http://gorilla-zen.myshopify.com/products/'.$catname.'"></iframe>');

?>
</body>
</html>