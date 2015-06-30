<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

</head>

<body>

<?php

	//定数MILEを定義(定数は大文字で定義）
	define( "TUBO",3.3);
	

	echo "設定された定数は". TUBO. "<br><br>";
	
	$r101 = 100 / TUBO;
	$r102 =  75 / TUBO;
	$r103 = 150 / TUBO;
	
	//echo "$r101";
	
	//printf ,　の後に文字列の追加はできない感じ。「%.2f」の部分で最後に定義してある変数の中身を表示
	printf("<p>１０１号室→%.2f坪</p>", $r101 );
	printf("<p>１０２号室→%.2f坪</p>", $r102 );
	printf("<p>１０３号室→%.2f坪</p>", $r103 );
	
	//printf("<p>１０３号室→%.2f坪</p>", 150 / TUBO );  これでも可
	
	//printf("<p>１０１号室→" . "%.2f", $r101 );
	//echo "坪</p>";
	
	//printf("<p>１０２号室→" . "%.2f", $r102 );
	//echo "坪</p>";
	
	//printf("<p>１０３号室→" . "%.2f", $r103 );
	//echo "坪</p>";
	
?>

</body>
</html>