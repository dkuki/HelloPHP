<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>テスト</title></head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<form method="post" action="cookie4_1.php">
ユーザー名：<input type="text" name="name"
 value="<?php if(isset($_COOKIE["name"])) print $_COOKIE["name"]; ?>">
<br>
パスワード：<input type="password" name="pass"
 value="<?php if(isset($_COOKIE["pass"])) print $_COOKIE["pass"]; ?>">
<br>

<?php 
if(isset($_COOKIE["ck"]) ){
	print '<input type="checkbox" name="ck" value="on" checked>次回からのID入力を省略';
}else{
	print '<input type="checkbox" name="ck" value="on">次回からのID入力を省略';
}?>"

<br>
<input type="submit" value="送信">
</body>

</html>
