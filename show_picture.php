<html>
<head>
    <meta charset="UTF-8">
    <title>显示图片</title>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
<?php
include 'user_top.php';
include 'conn.php';
header("Content-type:text/html;charset=utf-8");
$sql="select * from t_goods";
mysql_query("SET NAME UTF8");
$result=mysql_query($sql,$db_link);
while($v1=mysql_fetch_array($result)){
?>
<a style="width:300px;height:400px;border:1px solid black;float:left;"
href="good_details.php?pid=<?php echo $v1['pid']?>">
    <img src=<?php echo $v1['gimage']?> style="width:200px;height:200px;">
    <div>商品名称<?php echo $v1['gname']?></div>
    <div>商品价格<?php echo $v1['gprice']?></div>
</a>
<?php
}
?>
</body>
</html>