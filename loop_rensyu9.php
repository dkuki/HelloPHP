<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>

table, td{
	//border: 1px #888888 solid;
	//text-align: center;
}
	
</style>



</head>

<body>

<table border ="1">
<tr bgcolor=yellow><th>カウント</th><th>合計</td></th>

<?php

$y = 1 ;
$sum = 0 ;


for( $i = 1 ; $i <= 10 ; $i ++ ){
	
	if( $i % 2 == 0){
		echo "<tr bgcolor='#cfcfcf' >";
	}else{
		echo "<tr bgcolor='#fcfcfc' >";
	}
			echo "<td>";
			echo $i ;
			echo "</td>" ;
			
			echo "<td>";
			echo $sum = $sum + $i;
			echo "</td>" ;

		echo "</tr>";
}




?>
</table>




</body>
</html>