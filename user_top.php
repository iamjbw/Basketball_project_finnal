<?php
@session_start();
if(!empty($_SESSION['name'])){
?>
<div id="user_top">
<span class="welcome_top">欢迎您</span>
<span class="user_name"><?php echo $_SESSION['name']?><div class="user_more"><div class="user_namebg">
<img src=<?php echo $_SESSION["image"]?>>
<div class="inorout">
 <a href="login_page.php?page=1" onclick="login_out()">注销</a><span> |</span>
 <a href="personal_center.php">账号管理</a><br>
 <a href="index.php">回到主页</a>
 </div>
</div></div></span>
</div>
<?php
}else{
?>
   登录  注册
<?php
}
?>