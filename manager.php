<?php
include 'conn.php'?>
<?php
header("Content-type:text/html;charset=utf-8");
$sql="select * from t_users";
mysql_query("SET NAME UTF8");
$result=mysql_query($sql,$db_link);
$arr2=array();
while($v1=mysql_fetch_array($result)){
$arr1=array('aid'=>$v1['uid'],'aname'=>$v1['uname'],'apwd'=>$v1['upassword']);
array_push($arr2,$arr1);
}
echo json_encode($arr2);
?>