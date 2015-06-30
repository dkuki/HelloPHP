<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>
	
</style>


</head>

<body>


<?php

$a = array(
	"鈴木"   => 92 ,
	"佐藤"   => 74 ,
	"中村"   => 42 ,
	"三浦"   => 65
);

print "ソート前<br>";
foreach( $a as $key => $val ){
	print "キー：" . $key . " 要素：" . $val . "<br>" ;
}

asort($a);  //要素をソート

print "ソート後<br>";
foreach( $a as $key => $val ){
	print "キー：" . $key . " 要素：" . $val . "<br>" ;
}

?>


</body>
</html>