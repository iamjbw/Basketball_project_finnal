<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/login.js" type="text/javascript"></script>
</head>
<body>
<?php
include 'conn.php';
header("Content-type:text/html;charset=utf-8");
$v_page=$_GET['page'];
if(!empty($_GET['gid'])){
$v_gid=$_GET['gid'];
?>
<input type="hidden" value=<?php echo $v_gid?> id="gid">
<?php
}
?>
<input type="hidden" value=<?php echo $v_page?> id="page">
<div class="login_body">
<div class="user_login" id="login">
    <div id="error"></div>
    <input type="text" id="uname" value="手机号/会员名/邮箱" onkeydown="user_input(this)"><br><br>
    <input type="password" id="pwd"><br><br>
    <button onclick="user_login()" class="login button"><div class="shine"></div>登录</button>
    <button class="register button" onclick="fun_show()"><div class="shine"></div>注册</button>
    <img src="images/reset.png" onclick="user_reset()" id="reset">
</div>
<div class="user_register" id="register_bg">
    <label for="user_name" id="register_name">账户：</label><input type="text" id="user_name" onfocus="input()" onkeydown="enter(this)" ><div id="input_bg" class="input_bg"><div class="input_name"><ul><li id="oup">请输入您的账户名</li></ul></div></div><br><br>
    <label for="upwd">密码：</label><input type="password" id="upwd" onclick="input1()" onkeydown="enter(this)"><div id="input_bg1" class="input_bg"><div class="input_name"><ul><li id="oup1">请输入您的密码</li></ul></div></div><br><br>
    <label for="email">邮箱：</label><input type="text" id="email" onkeydown="enter(this)" onclick="input2()"><div id="input_bg2" class="input_bg"><div class="input_name"><ul><li id="oup2">请输入您的手机号</li></ul></div></div><br><br>
    <label for="phone">手机号码：</label><input type="text" id="phone" onkeydown="enter(this)" onclick="input3()"><div id="input_bg3" class="input_bg"><div class="input_name"><ul><li id="oup3">请输入您的邮箱</li></ul></div></div><br><br>
    <label for="content" class="person" >个人介绍：</label><textarea id="content" rows="6" cols="40" onclick="hide()"></textarea><br><br>
    <button onclick="register()" id="button_register" class="button"><div class="shine"></div>注册</button>
    <a href="#" id="register_x" onclick="login_now()">×</a>
</div>
<div class="register_success" id="register_success" >
    <span>注册成功，您现在可以：</span>
    <button id="login_now" onclick="login_now()">立即登录</button>
</div>
    </div>
</body>
</html>