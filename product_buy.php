<?php
header("Content-type:text/html;charset=utf-8");
include 'conn.php';
$v_gid=$_REQUEST['gid'];
$v_price=$_REQUEST['price'];
$v_size=$_REQUEST['size'];
$v_number=$_REQUEST['number'];
$v_count=$_REQUEST['count'];
$v_uid=$_REQUEST['uid'];
$sql="insert into t_orderform(pid,price,size,number,count,uid) values('$v_gid','$v_price','$v_size','$v_number','$v_count','$v_uid')";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link) or die(mysql_error());
if(!empty($result)){
echo "购买成功";
}else echo "购买失败";
?>