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

$sum    = 0 ;
$heikin = 0 ;

$a = array(
	"鈴木"   => 92 ,
	"佐藤"   => 74 ,
	"中村"   => 42 ,
	"三浦"   => 65
);


foreach( $a as $key => $val ){
	$sum = $sum + $val ;
}


foreach( $a as $key => $val ){
	print "指名：" . $key . " 点数：" . $val . "<br>" ;
}

print "合計点：" . $sum . "<br>" ;
$heikin = $sum / 4 ;

print "平均点：";
printf ("%.1f",$heikin) ;


?>


</body>
</html>