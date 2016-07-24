<?php
include 'conn.php';
?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from t_orderform";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
while($v1=mysql_fetch_array($result)){
$arr1=array('oid'=>$v1['oid'],'pid'=>$v1['pid'],'price'=>$v1['price'],'size'=>$v1['size'],'number'=>$v1['number'],'count'=>$v1['count'],'uid'=>$v1['uid']);
array_push($arr2,$arr1);
}
echo json_encode($arr2);
?>