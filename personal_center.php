<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/select_address.js" type="text/javascript"></script>
</head>
<body onload="state()">
<div class="personal_body">
<?php
include 'conn.php';
include 'user_top.php';
?>
<?php
$msg="";
if(!empty($_FILES)){
   $tmp_filename=$_FILES["upname"]["tmp_name"];
   $f_name=$_FILES["upname"]["name"];
   $f_size=$_FILES["upname"]["size"];
   $f_type=$_FILES["upname"]["type"];
if($f_type=='image/jepg' or $f_type=='image/png'){
   if($f_size>0 && $f_size <= 2048000){
   $upflag=move_uploaded_file($tmp_filename,"head_images/".$f_name);
    if($upflag==true){
        insertpro("head_images/".$f_name) or die(mysql_error());
    }
   }else {echo $msg="上传文件不能超过2M";}
}else {echo $msg="只能上传格式为jpg或png的图片";}
}
function insertpro($vimage){
        $db_link=mysql_connect("localhost","root","admin")or die("数据库服务器连接失败".mysql_error());
        $db=mysql_select_db("myproject",$db_link)or die("数据库连接失败".mysql_error());
        $i_id=$_SESSION["id"];
        $i_sql="update t_users set uimage='$vimage' where uid=$i_id";
        mysql_query("SET NAMES UTF8");
        $i_result=mysql_query($i_sql,$db_link) or die(mysql_error());
}
?>
<div class="personal_data">
<div class="personal_data_left">
<img src=<?php echo $_SESSION["image"]?>>
<div class="stick_left">个人资料
<div class="personal_data_right">
<div class="thought_line"><span>个人资料</span></div>
<?php
  header("Content-type:text/html;charset=utf-8");
  $uid=$_SESSION["id"];
  $sql="select * from t_users where uid=$uid";
  $result=mysql_query($sql,$db_link);
  if($v1=mysql_fetch_array($result) or die(mysql_error())){
 ?>
 <form class="persons_date" method="post" action="#">
 <div class="date_head"><span class="persons_date_span">当前头像：</span><span class="now_head"><img src=<?php echo $_SESSION["image"]?>><a class="change_head" href="#">编辑头像</a></span></div>
 <div><span class="persons_date_span">用户名：</span><?php echo $v1['uname']?></div>
 <div><span class="persons_date_span">联系方式：</span><input type="text" id="utel" value=<?php echo $v1['uphone']?> name="phone"></div>
 <div><span class="persons_date_span">邮箱：</span><span><?php echo $v1['uemail']?></span></div>
 <div><span class="persons_date_span date_content">个性签名：</span><textarea rows="6" cols="24" name="content"><?php echo $v1['ucontent']?></textarea></div>
 <div class="submit_line"><input type="submit" value="保存" class="person_save" onclick="success()"></div>
 </form>
<?php
  }
?>
</div>
</div>
<div class="stick_left">头像照片
<div class="personal_data_right">
<div class="thought_line"><span>头像照片</span></div>
 <form class="persons_date" method="post" enctype="multipart/form-data" action="#">
 <div class="date_head"><span class="persons_date_span">当前头像：</span><span class="now_head"><img src=<?php echo $_SESSION["image"]?>></span></div>
<?php
if(!empty($msg)){
echo $msg;
}
?>
<div><input type="file" name="upname"></div><br><br>
 <div class="submit_line"><input type="submit" value="上传" class="person_save"></div>
</form>
 </div>
 </div>
<div class="stick_left">隐私设置
<div class="personal_data_right">
<div class="thought_line"><span>隐私设置</span></div>
 <div class="date_head"></div>
 <form class="persons_date" method="post" action="#">
 <div class="check">
          <label><input type="radio" name="ask">所有人</label>
          <label><input type="radio" name="ask">与我互粉的人</label>
          <label><input type="radio" name="ask">只有我自己</label>
    </div>
 <div class="check">
    <label><input type="radio" name="search">是</label>
    <label><input type="radio" name="search">否</label>
 </div>
 <div class="check">
 <label><input type="radio" name="focus_me">所有人</label>
 </div>
<div class="submit_line submit_line_none"><input type="submit" value="保存" class="person_save"></div>
 </form>
 </div>
 </div>
<div class="stick_left">安全设置
<div class="personal_data_right">
<div class="thought_line"><span>个人资料</span></div>
 <form class="persons_date" method="post" action="#">
 <div class="date_head"></div>
 <div class="check"><label>原密码：</label><input type="password" name="old_password"></div>
 <div class="check"><label>新密码：</label><input type="password" name="new_password"></div>
 <div class="check"><label>确认密码：</label><input type="password" name="again_password"></div>
 <div class="submit_line submit_line_none none_position"><input type="submit" value="修改" class="person_save" onclick="check_password()"></div>
 </form>
 <div class="php_hide">
 <?php
 $pwd_id=$_SESSION["id"];
 $u_password=$_SESSION["pwd"];
 $o_password=$_POST['old_password'];
 $n_password=$_POST['new_password'];
 $a_password=$_POST['again_password'];
 $pwd_sql="update t_users set upassword='$n_password' where uid='$pwd_id'";
if($u_password==$o_password){
    if($n_password==$a_password){
    $pwd_result=mysql_query($pwd_sql,$db_link);
        if(!empty($pwd_result)){?>
            <div class="check_respond"><?php echo "修改成功";?></div>
        <?php
        }else{?>
        <div class="check_respond"><?php echo "修改失败";?></div>
        <?php
        }
    }else{?>
        <div class="check_respond"><?php echo "两次密码输入不相同，请重新输入";?></div>
    <?php
    }
}else{?>
<div class="check_respond"><?php echo "密码错误，请重新输入";?></div>
 <?php
 }
 ?>
 </div>
 </div>
 </div>
<div class="stick_left">收货地址
<div class="personal_data_right">
<div class="thought_line"><span>收货地址</span></div>
 <form class="persons_date" method="post" action="#">
<div class="address">
<div>
    州：<select id="state" onchange="p_country()"><option>请选择</option></select>
    国家：<select id="country" onchange="p_province()"><option>请选择</option></select>
    省份(州)：<select id="province" onchange="p_city()"><option>请选择</option></select>
    城市：<select id="city" onchange="write_in()"><option>请选择</option></select><br><br><br><br>
</div>
<div class="address_detail"><label>详细地址：</label><textarea id="text_content" rows="6" cols="22" name="detail"></textarea><span class="color_red"> *</span></div>
<div><label>联系人：</label><input type="text" name="r_name"><span class="color_red"> *</span></div>
<div><label>联系方式：</label><input type="text" name="r_phone"><span class="color_red"> *</span></div>
</div>
<div class="submit_line none_position"><input type="submit" value="保存" class="person_save" onclick="check_password()"></div>
 </form>
 <div class="php_hide">
 <?php
 $a_id=$_SESSION["id"];
 $a_detail=$_POST['detail'];
 $a_name=$_POST['r_name'];
 $a_phone=$_POST['r_phone'];
 $a_sql="insert into t_receiver(uid,raddress,rname,rphone) values('$a_id','$a_detail','$a_name','$a_phone')";
 mysql_query("SET NAMES UTF8");
 $a_result=mysql_query($a_sql,$db_link) or die(mysql_error());
 if(!empty($a_result)){
 echo "成功";
 }else echo "失败";
 ?>
 </div>
 </div>
 </div>
</div>
</div>
</div>
<div class="php_hide">
<?php
$u_id=$_SESSION["id"];
$u_phone=$_POST['phone'];
$u_content=$_POST['content'];
$u_sql="update t_users set uphone=$u_phone,ucontent='$u_content' where uid=$u_id";
$u_result=mysql_query($u_sql,$db_link) or die(mysql_error());
if(!empty($u_result)){
?>
<input id="person_date" type="hidden" value=<?php echo 1?>>
<?php
}else{
?>
<input id="person_date" type="hidden" value=<?php echo 2?>>
<?php
}
?>
</div>
</body>
</html>
<script>
function success(){
    var person=document.getElementById("person_date").value;
    if(person=1){
    alert("保存成功");
    }else alert("保存失败");
}
</script>