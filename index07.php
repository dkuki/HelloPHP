<?php 
	$smg = "<p>ぼくはカエルです</p>\n";
	$smg .= "<p>よろしくね！</p>\n";
	$age = 10;
	$age = "<p>ぼくは{$age}歳なんだよ</p>\n";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>始めようｐｈｐ</title>
</head>

<body>

    <h1>ＰＨＰの基本</h1>
    
    <?php echo $smg; ?>
    
    <p>ＰＨＰを覚えるぞ</p>
    
    <?php echo $age; ?>
    

</body>
</html>