<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结算</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/pay_now.js" type="text/javascript"></script>
</head>
<body>
<div class="count_container">
<div class="count_top">
<?php
include 'conn.php';
header("Content-type:text/html;charset=utf-8");
$v_gid=$_GET['gid'];
$v_count=$_GET['count'];
$v_size=$_GET['size'];
$v_number=$_GET['number'];
$v_price=$_GET['price'];
$v_uid=$_GET['uid'];
$sql="select * from t_goods where gid='$v_gid'";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link) or die(mysql_error());
while($v1=mysql_fetch_array($result)){
?>
    <div class="count_top_left"><?php echo $v1['gname'];?></div>
    <div class="count_top_right">已选商品（不含运费）<span class="color_red">￥<span><?php echo $v_count;?></span></span></div>
</div>
<div class="count_good">
    <img src=<?php echo $v1['small-image3'];?>>
    <div class="count_good_right">
        <p><?php echo $v1['gname'];?></p>
        <p>尺码：<span><?php echo $v_size;?></span></p>
        <p>价格：<span class="color_red">￥<span><?php echo $v_price;?></span></span></p>
        <p>数量：<span><?php echo $v_number;?></span></p>
        <p>总计：<span class="color_red">￥<span><?php echo $v_count;?></span></span></p>
        <p><?php echo $v1['gcontent'];?></p>
    </div>
</div>
<div class="pay">
    <div class="pay_span">
        <span>已选商品&nbsp;<span class="color_red"><?php echo $v_number;?></span>&nbsp;件&nbsp;&nbsp;&nbsp;</span>
        <span>合计(不含运费)&nbsp;<span class="color_red">￥<span><?php echo $v_count;?></span></span></span>
    </div>
    <?php
    }
    ?>
<button class="pay_now" id="pay_now" onclick="pay_now()">结算</button>
</div>
</div>
<input type="hidden" value=<?php echo $v_gid;?> id="gid">
<input type="hidden" value=<?php echo $v_price;?> id="price">
<input type="hidden" value=<?php echo $v_number;?> id="number">
<input type="hidden" value=<?php echo $v_size;?> id="size">
<input type="hidden" value=<?php echo $v_count;?> id="count">
<input type="hidden" value=<?php echo $v_uid;?> id="uid">
</body>
</html>