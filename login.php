<?php
include 'conn.php';
?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_name=$_POST['uname'];
$v_password=$_POST['pwd'];
$sql="select * from t_users where uname='$v_name' and upassword='$v_password'";
$result=mysql_query($sql,$db_link);
$v_array=mysql_fetch_array($result);
if(empty($v_name) or empty($v_password)){
echo "null";
}else{
if(!empty($v_array)){
    if($v_name=="admin"){
        echo "manager";
    }
    else{
        echo "success";
        session_start();
        $_SESSION["id"]=$v_array['uid'];
        $_SESSION["name"]=$v_array['uname'];
        $_SESSION["pwd"]=$v_array['upassword'];
        $_SESSION["image"]=$v_array['uimage'];
        }
            }else{
                echo "fail";
                  }
}
?>