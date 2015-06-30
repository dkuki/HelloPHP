<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php
	print "先頭から５文字切り取る：".mb_substr("あいうけおかきくけこ", 0, 5);
	print "<br>";
	print "末尾から２文字切り取る：".mb_substr("あいうえおかきくけこ", -3, 3);
?>

</body>
</html>