<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
	
	$i = 0;

	if(strlen($_POST['name']) == 0){
			print "ユーザー名に何も入力されていません<br>";
			$i = 1;
	}
	if(strlen($_POST['pass1']) == 0){
			print "パスワードに何も入力されていません<br>";
			$i = 1;
	}
	if(strlen($_POST['pass2']) == 0){
			print "パスワード確認欄に何も入力されていません<br>";
			$i = 1;
	}
	
	if( (strlen($_POST['pass1']) < 4) || (strlen($_POST['pass1']) > 8) ){
			print "パスワードは4文字以上8文字以下にしてください<br>";
			$i = 1;
	}
	
	if( strlen($_POST['pass1'] != $_POST['pass2']) ){
			print "パスワード欄とパスワード確認欄の値が違います<br>";
			$i = 1;
	}

	if( $i == 0){
		print "以下の内容で登録されました<br>";
		print "ユーザー名：". $_POST['name'] . "<br>";
		print "パスワード：". $_POST['pass1'] . "<br>";
	}


?>
</from>

</body>
</html>
