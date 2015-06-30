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

<?php
$a   = "#E1E1BC";
$b   = "#E7E7E7";
$red = "red";
?>

<table border="1">
    <tr <?php echo "bgcolor=$a"; ?> >
        <th rowspan="2">県名</th>

        <th rowspan="2">総人口（千人）</th>
        <th rowspan="2">男性人口（千人）</th>
        <th rowspan="2">女性人口（千人）</th>
        <th colspan="2">男女比</th>
	    <tr <?php echo "bgcolor=$a"; ?> >
	        <th>男性</th>
	        <th>女性</th>
        </tr>
    </tr>
    <tr <?php echo "bgcolor=$b"; ?> >
        <td>青森県</td>
        <td>1407</td>
        <td>663</td>
        <td>744</td>
        <td>47.1%</td>
        <td style="color: <?php echo $red; ?>" ><?php printf("%.1f", ( (744 / 1407) * 100 ) );?>%</td>
    </tr>
    <tr <?php echo "bgcolor=$b"; ?> >
        <td>岩手県</td>
        <td>1364</td>
        <td>652</td>
        <td>712</td>
        <td style="color: <?php echo $red; ?>" ><?php printf("%.1f", ( (652 / 1364) * 100 ) );?>%</td>
        <td>52.2%</td>
    </tr>
        <tr <?php echo "bgcolor=$b"; ?> >
        <td>秋田県</td>
        <td>1121</td>
        <td>527</td>
        <td>593</td>
        <td>47.0%</td>
        <td style="color: <?php echo $red; ?>" ><?php printf("%.1f", ( (593 / 1121) * 100 ) );?>%</td>
    </tr>
</table>




</body>
</html>