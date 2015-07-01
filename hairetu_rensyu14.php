<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>
	
</style>


</head>

<body>

<table border ="1">
<tr><td>番号</td><td>点数</td></tr>
<?php

$max    = 0 ;
$over70 = 0 ;


//$score = array(
//	array( 0 , 80 ),
//	array( 1 , 60 ),
//	array( 2 , 92 ),
//	array( 3 , 22 ),
//	array( 4 , 50 )
//);

$score = array(80,60,92,22,50);

foreach($score as $k => $v){
	print "<tr><td>" . $k . "</td><td>" . $v . "</td></tr>";
	if($max < $v ){
		$max = $v;
	}
	if($v >= 70){
		$over70++ ;
	}
}



?>
</table>
<p>最高点：<?php print $max; ?> 点</p>
<p>７０点以上：<?php print $over70; ?> 人</p>

</body>
</html>