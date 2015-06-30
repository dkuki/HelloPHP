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


$y   = 1;
$x   = 1;
$sum = 0;



while( $sum < 15 ){
	
	print "0";

	for( $i = 1 ; $i <= $x ; $i++){
		print " + $i";
	}
	$sum = $sum + $x ;
	$x++ ;
	print " = $sum<br>";


	
}



?>


</body>
</html>