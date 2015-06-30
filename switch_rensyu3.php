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

$zaiko =  0 ;

switch( $zaiko ){
	case 0 :
		echo "在庫がありません";	
		break;
	case 1 :
	case 2 :
	case 3 :
		echo "在庫が僅かです";
		break;
	default:
		echo "在庫がございます";
		break;
}

?>


</body>
</html>