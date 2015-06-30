<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<style>

table, td{
	border: 2px #888888 solid;
	text-align: center;
}
	
</style>



</head>

<body>

<?php
$a = "九鬼";
$b = "大輔";

print <<< doc
	<table>
		<tr>
			<td>性</td>
			<td>名</td>
		</tr>
		<tr>
			<td>$a</td>
			<td>$b</td>
		</tr>
	</table>
doc;
?>

</body>
</html>