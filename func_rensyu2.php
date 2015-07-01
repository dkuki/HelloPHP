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

$kokugo = array(52,69,74,95,41);

function getStats($score){
	
	$a = array(0,0);	//関数内の配列を定義
	
	//以下の3行で合計、平均を求めて配列に落とし込む
	//$sum = array_sum($score);
	//$ave = $sum / count($score);
	//return array($sum,$ave);
	
	foreach($score as $v ){
		$a[0] = $a[0] + $v ;	//合計点を配列の要素数分、足して配列に落とし込む
	}

	$a[1] = $a[0] / count($score) ; //合計点から要素数を割って平均点を出す。
	
	
	return $a;	//戻り値は
}

$result = getStats($kokugo) ;


print "<br>合計点：" . $result[0];

print "<br>平均点：" . $result[1];

?>
</table>

</body>
</html>