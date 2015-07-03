<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php

	//$msg =""; //エラー格納用変数
	
	//foreach($msg as $val){
    //		print $val."<br>";
  	//}



	if( ($_POST['name'] =='admin') || ($_POST['pass'] == 1234 ) ){ 
    		print "ログイン OK <br>";
	//}elseif(strlen($_GET['name']) == 0){
	//		print "ユーザー名に何も入力されていません<br>";
	//}elseif(strlen($_GET['pass']) == 0){
	//		print "パスワードに何も入力されていません<br>";
	}
	
  	//if(empty($name)){
  	//}else
	//if(){
	//}
	//if(){
	//}
	
	if(strlen($_POST['name']) == 0){
			print "ユーザー名に何も入力されていません<br>";
	}
	if(strlen($_POST['pass']) == 0){
			print "パスワードに何も入力されていません<br>";
	}
	
	if( (strlen($_POST['name']) == 0) || (strlen($_POST['pass']) == 0) ){
			print "ユーザー名またはパスワードが違います<br>";
	}

?>
</from>

</body>
</html>
