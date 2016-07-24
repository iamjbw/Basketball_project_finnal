 <?php
 header("Content-type:text/html;charset=utf-8");
 include 'conn.php';
 $g_id=$_GET['gid'];
 $g_name=$_GET['gname'];
 $g_short=$_GET['gshort'];
 $g_price=$_GET['gprice'];
 $g_saved=$_GET['gsaved'];
 $g_content=$_GET['gcontent'];
 $sql="update t_goods set gname='$g_name',gprice='$g_price',gshortname='$g_short',gcontent='$g_content',gsaved='$g_saved' where gid='$g_id'";
 mysql_query("SET NAMES UTF8");
 $result=mysql_query($sql,$db_link) or die(mysql_error());
 if(!empty($result)){
 echo "修改成功";
 }else{echo "修改失败";
 }
 ?>