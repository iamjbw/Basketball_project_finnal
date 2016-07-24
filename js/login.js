function createXHR() {
    var XHPequest;
    if (window.XMLHttpRequest) {
        XHPequest = new XMLHttpRequest()
    } else if (window.ActiveXObject) {
        try {
            XHPequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            XHPequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return XHPequest;
}
function user_login() {
    if(document.getElementById("gid")!=null || document.getElementById("gid")!=undefined){
        var v_gid=document.getElementById("gid").value;
    }
    var v_page=document.getElementById("page").value;
    var div = document.getElementById("error");
    var v_name=document.getElementById("uname").value;
    var v_pwd=document.getElementById("pwd").value;
    var v_url="login.php";
    var XHR=createXHR();
    XHR.open("post",v_url,true);
    XHR.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
    XHR.onreadystatechange=function(){
        if(XHR.status== 200 && XHR.readyState== 4){
            var str=XHR.responseText;
            if(str=='success'){
                if(v_page==1){
                    location.href='index.php';
                }
                if(v_page==2){
                    location.href='news.php';
                }
                if(v_page==3){
                    location.href='shop_area.php';
                }
                if(v_page==4){
                    location.href='single_product.php?gid='+v_gid;
                }
            }
            if(str=="manager"){
                location.href='manager_page.php';
            }
            if(str=="fail"){
                div.innerHTML="请输入正确的账号密码,是否"+"<span class='forget'>忘记密码</span class='forget'>或"+"<span>忘记用户名</span>";
                div.style.display="block";
                div.style.background="url('images/null.png') left no-repeat #FEFEFE";
            }
            if(str=="null"){
                div.innerText="请输入账号名和密码";
                div.style.display="block";
                div.style.background="url('images/null.png') left no-repeat #FEFEFE" ;
            }
        }
    }
    XHR.send("uname="+v_name+"&pwd="+v_pwd);
}
var uname=document.getElementById("uname");
function user_input(v1){
    if(uname==null){
        v1.value="";
        document.getElementById("uname").style.color="black";
    }
    uname+=uname;
    document.getElementById("reset").style.display="block";
}
function user_reset(){
    document.getElementById("uname").value="";
}
function register(){
    var name=document.getElementById("user_name");
    var pwd=document.getElementById("upwd");
    var email=document.getElementById("email");
    var phone=document.getElementById("phone");
    if(name.value=="" || (name.value).length<6 || pwd.value=="" || (pwd.value).length<6 || email.value=="" || phone.value==""){
        if(name.value==""){
            document.getElementById("input_bg").style.display="block";
            document.getElementById("oup").innerText="用户名不能为空";
        }else if((name.value).length<6){
            document.getElementById("input_bg").style.display="block";
            document.getElementById("oup").innerText="用户名至少为6位";
        }
        if(pwd.value==""){
            document.getElementById("input_bg1").style.display="block";
            document.getElementById("oup1").innerText="密码不能为空";
        }else if((pwd.value).length<6){
            document.getElementById("input_bg1").style.display="block";
            document.getElementById("oup1").innerText="密码至少为6位";
        }
        if(email.value==""){
            document.getElementById("input_bg2").style.display="block";
            document.getElementById("oup2").innerText="邮箱不能为空";
        }
        if(phone.value==""){
            document.getElementById("input_bg3").style.display="block";
            document.getElementById("oup3").innerText="密码不能为空";
        }
    }
    else {
        var XHR=createXHR();
        var v_name=document.getElementById("user_name").value;
        var v_pwd=document.getElementById("upwd").value;
        var v_eml=document.getElementById("email").value;
        var v_pho=document.getElementById("phone").value;
        var v_my=document.getElementById("content").value;
        var v_url="register.php";
        XHR.open("post",v_url,true);
        XHR.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
        XHR.onreadystatechange=function(){
            if(XHR.status==200&&XHR.readyState==4){
                var str=XHR.responseText;
                if(str=='success'){
                    document.getElementById("register_bg").style.display="none";
                    document.getElementById("register_success").style.display="block";
                }
            }
        }
        XHR.send("uname="+v_name+"&pwd="+v_pwd+"&ueml="+v_eml+"&upho="+v_pho+"&my="+v_my);
    }
}
function fun_show(){
    document.getElementById("register_bg").style.display="block";
    document.getElementById("login").style.display="none";
}
function input(){
    document.getElementById("input_bg").style.display="block";
    document.getElementById("input_bg1").style.display="none";
    document.getElementById("input_bg2").style.display="none";
    document.getElementById("input_bg3").style.display="none";
}
function input1(){
    document.getElementById("input_bg1").style.display="block";
    document.getElementById("input_bg").style.display="none";
    document.getElementById("input_bg2").style.display="none";
    document.getElementById("input_bg3").style.display="none";
}
function input2(){
    document.getElementById("input_bg1").style.display="none";
    document.getElementById("input_bg").style.display="none";
    document.getElementById("input_bg2").style.display="block";
    document.getElementById("input_bg3").style.display="none";
}
function input3(){
    document.getElementById("input_bg1").style.display="none";
    document.getElementById("input_bg").style.display="none";
    document.getElementById("input_bg2").style.display="none";
    document.getElementById("input_bg3").style.display="block";
}
function enter(){
    if(this.value!=0){
        document.getElementById("input_bg").style.display="none";
        document.getElementById("input_bg1").style.display="none";
        document.getElementById("input_bg2").style.display="none";
        document.getElementById("input_bg3").style.display="none";
    }
}
function hide(){
    document.getElementById("input_bg").style.display="none";
    document.getElementById("input_bg1").style.display="none";
    document.getElementById("input_bg2").style.display="none";
    document.getElementById("input_bg3").style.display="none";
}
function login_now(){
    document.getElementById("register_success").style.display="none";
    document.getElementById("register_bg").style.display="none";
    document.getElementById("login").style.display="block";
}