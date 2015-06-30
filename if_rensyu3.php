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

$blood =  "B" ;

if( $blood == "A"){
	echo "A型です";	
}elseif( $blood == "B" ){
	echo "B型です";	
}elseif( $blood == "AB" ){
	echo "AB型です";	
}elseif( $blood == "O" ){
	echo "O型です";
}else{
	echo "不正なデータです";
}

?>


</body>
</html>