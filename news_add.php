 <?php
 header("Content-type:text/html;charset=utf-8");
 include 'conn.php';
 $n_id=$_GET['nid'];
 $n_title=$_GET['ntitle'];
 $n_content=$_GET['ncontent'];
 if(!empty($_GET['nimage'])){
  $n_image=$_GET['nimage'];
  $sql="update t_news set ntitle='$n_title',ncontent='$n_content',nimage='$n_image' where nid='$n_id'";
 }else{
  $sql="update t_news set ntitle='$n_title',ncontent='$n_content' where nid='$n_id'";
 }
 mysql_query("SET NAMES UTF8");
 $result=mysql_query($sql,$db_link) or die(mysql_error());
 if(!empty($result)){
 echo "修改成功";
 }else{echo "修改失败";
 }
 ?>