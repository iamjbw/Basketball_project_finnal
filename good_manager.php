<?php
include 'conn.php';
?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from t_goods";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
while($v1=mysql_fetch_array($result)){
$arr1=array('gid'=>$v1['gid'],'gshortname'=>$v1['gshortname'],'gprice'=>$v1['gprice'],'gsaved'=>$v1['gsaved']);
array_push($arr2,$arr1);
}
echo json_encode($arr2);
?>