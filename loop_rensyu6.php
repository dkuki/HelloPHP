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


for( $i = 1; $i <= 40 ; $i++){
	
	print "$i"; //とりあえず数字を表示
  //if(   $i %3 == 0) || (subtr($i, 0 , 1) == 3 || substr($i, 1, 1) == 3 ) {
	if(( $i % 3 == 0) || (strstr($i , '3'))){
		print " YES!";
	}
	if(( $i % 8 == 0) || (strstr($i , '8'))){
		print " OK!";	
	}
	print "<br>";
}

?>


</body>
</html>