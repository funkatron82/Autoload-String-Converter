<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
function camel_to_dash( $className) {
	return 	strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $className)); 
}

function underscore_to_slash( $className ) {
	return preg_replace('#\\\|_(?!.+\\\)#','/',$className );
}

function dash_to_slash( $className ) {
	return preg_replace('#\\\|-(?!.+\\\)#','/',$className );
}
echo dash_to_slash( 'book1-hello0win' );
?>
</body>
</html>