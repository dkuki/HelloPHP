<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

</head>

<body>

<?php

	//定数MILEを定義(定数は大文字で定義）
	define( "MILE",1.6);
	
	echo "設定された定数milは". MILE . "<br><br>";
	
	echo "<p>東京". (715 / MILE) . "マイル</p>";
	echo "<p>盛岡". (180 / MILE) . "マイル</p>";
	echo "<p>仙台". (350 / MILE) . "マイル</p>";

?>

</body>
</html>