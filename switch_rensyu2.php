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

$month =  1 ;

switch( $month ){
	case 3 :
	case 4 :
	case 5 :
		echo "春です";	
		break;
	case 6 :
	case 7 :
	case 8 :
		echo "夏です";
		break;
	case 9 :
	case 10 :
	case 11 :
		echo "秋です";	
		break;
	case 12 :
	case 1 :
	case 2 :
		echo "冬です";
		break;
	default:
		echo "正しい数値を入力してください";
		
		
}

?>


</body>
</html>