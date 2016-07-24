<?php
include 'conn.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$delid=$_GET['vdelid'];
$sql="delete from t_users where uid=$delid";
mysql_query("SET NAME UTF8");
$v_result=mysql_query($sql,$db_link);
if(!empty($v_result)){
echo "success";
}else{
echo "fail";
}
?>