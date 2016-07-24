<?php
include 'conn.php';
?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from t_news";
mysql_query("SET NAME UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
while($v1=mysql_fetch_array($result)){
$arr1=array('nid'=>$v1['nid'],'ntitle'=>$v1['ntitle'],'ncontent'=>$v1['ncontent'],'nimage'=>$v1['nimage']);
array_push($arr2,$arr1);
}
echo json_encode($arr2);
?>