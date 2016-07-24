<?php
include 'conn.php';
?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_name=$_POST['uname'];
$v_password=$_POST['pwd'];
$v_eml=$_POST['ueml'];
$v_pho=$_POST['upho'];
$v_my=$_POST['my'];
$db_link=mysql_connect("localhost","root","admin")or die("数据库服务器连接失败".mysql_error());
$db=mysql_select_db("myproject",$db_link)or die("数据库连接失败".mysql_error());
$sql="insert into t_users(uname,upassword,uemail,uphone,ucontent) values('$v_name','$v_password','$v_eml','$v_pho','$v_my')";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
if(!empty($result)){
echo "success";
}else{
echo "false";
}
?>
