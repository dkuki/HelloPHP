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

$money =  10000 ;

if( $money <= 0){
	echo "貯金がありません";	
}elseif( $money <= 1000 ){
	echo "貯金がわずかです";	
}else{
	echo "貯金がございます";
}

?>


</body>
</html>