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
<?php
for( $i = 1 ; $i <= 9 ; $i ++ ){
	
	echo "<tr>";
		for( $x = 1 ; $x <= 9 ; $x++ ){
			print "<td>" . $i * $x . "</td>";
		}
	echo "</tr>";


}
?>
</table>




</body>
</html>