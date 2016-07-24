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
function member_queryall(){
    document.getElementById("table_bg").innerText="";
    var XHR=createXHR();
    var v_url="manager.php";
    XHR.open('get',v_url,true);
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            var json_v=eval(str);
            var table=document.createElement("table");
            var TR1= document.createElement("tr");
            var TH1=document.createElement("th");
            var TH2=document.createElement("th");
            var TH3=document.createElement("th");
            var TH4=document.createElement("th");
            TH1.innerText="序号";
            TH2.innerText="用户名";
            TH3.innerText="密码";
            TH4.innerText="操作";
            TR1.appendChild(TH1);
            TR1.appendChild(TH2);
            TR1.appendChild(TH3);
            TR1.appendChild(TH4);
            table.appendChild(TR1);
            var tbody=document.createElement("tbody");
            table.appendChild(tbody);
            for(var i= 0;i<json_v.length;i++){
                var TR= document.createElement("tr");
                var td1=document.createElement("td");
                var td2=document.createElement("td");
                var td3=document.createElement("td");
                var td4=document.createElement("td");
                td1.innerText=json_v[i].aid;
                td2.innerText=json_v[i].aname;
                td3.innerText=json_v[i].apwd;
                td4.innerHTML="<a href='#' onclick='member_delete("+json_v[i].aid+")'>删除</a>";
                TR.appendChild(td1);
                TR.appendChild(td2);
                TR.appendChild(td3);
                TR.appendChild(td4);
                table.appendChild(TR);
            }
            table.style.display="block";
            var list=document.getElementById("table_bg");
            list.appendChild(table);
        }
    }
    XHR.send();
}
$(function(){
    $("#manager_hide a").click(function(){
        $("#manager_top").animate({top:"-35px"},500);
        $("#manager_show").css({display:"block"});
        $("#manager_show").animate({top:"35px"},500);
    });
    $("#manager_show a").click(function() {
        $("#manager_show").animate({top:"-35px"},500);
        $("#manager_show").css({display:"none"});
        $("#manager_top").animate({top:"0px"},500);
    });
});
var timer;
function manager_time(){
    var date=new Date();
    document.getElementById("manager_time").innerText=date.getFullYear()+"年"+(date.getMonth()+1)+"月"+date.getDate()+"日"+" "+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
    document.getElementById("manager_time").style.color="#ae0000";
}timer=setInterval(manager_time,1000);
function news_queryall(){
    document.getElementById("table_bg").innerText="";
    var XHR=createXHR();
    var v_url="news_manager.php";
    XHR.open('get',v_url,true);
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            var json_v=eval(str);
            var table=document.createElement("table");
            var TR1= document.createElement("tr");
            var TH1=document.createElement("th");
            var TH2=document.createElement("th");
            var TH3=document.createElement("th");
            var TH4=document.createElement("th");
            var TH5=document.createElement("th");
            TH1.innerText="新闻序号";
            TH2.innerText="新闻标题";
            TH3.innerText="新闻详细";
            TH4.innerText="新闻图片";
            TH5.innerText="操作";
            TR1.appendChild(TH1);
            TR1.appendChild(TH2);
            TR1.appendChild(TH3);
            TR1.appendChild(TH4);
            TR1.appendChild(TH5);
            table.appendChild(TR1);
            var tbody=document.createElement("tbody");
            table.appendChild(tbody);
            for(var i= 0;i<json_v.length;i++){
                var TR= document.createElement("tr");
                var td1=document.createElement("td");
                var td2=document.createElement("td");
                var td3=document.createElement("td");
                var td4=document.createElement("td");
                var td5=document.createElement("td");
                td1.innerText=json_v[i].nid;
                td2.innerText=json_v[i].ntitle;
                td3.innerText=json_v[i].ncontent;
                td4.innerText=json_v[i].nimage;
                td5.innerHTML="<a href='#' onclick='news_change()'>修改</a>";
                TR.appendChild(td1);
                TR.appendChild(td2);
                TR.appendChild(td3);
                TR.appendChild(td4);
                TR.appendChild(td5);
                table.appendChild(TR);
            }
            table.style.display="block";
            var list=document.getElementById("table_bg");
            list.appendChild(table);
        }
    }
    XHR.send();
}
function member_delete(delid){
    var v1=confirm("确定删除吗？");
    if(v1=true){
        var XHR=createXHR();
        var v_url="member_delete.php?vdelid="+delid;
        XHR.open('get',v_url,true);
        XHR.onreadystatechange=function(){
            if(XHR.status == 200 && XHR.readyState == 4){
                var str = XHR.responseText;
            }
            if(str=="success"){
                document.getElementById("table_bg").innerText="";
                member_queryall();
            }
        }
    }
    XHR.send();
}
function news_change(){
    document.getElementById("news_add").style.display="block";
}
function news_out(){
    document.getElementById("news_add").style.display="none";
}
function news_add(){
    var nid=document.getElementById("news_id").value;
    var ntitle=document.getElementById("news_title").value;
    var ncontent=document.getElementById("news_content").value;
    var nimage=document.getElementById("news_image").value;
    var XHR=createXHR();
    var v_url="news_add.php?nid="+nid+"&ntitle="+ntitle+"&ncontent="+ncontent+"&nimage="+nimage;
    XHR.open('get',v_url,true);
    XHR.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            alert(str);
            news_queryall();
            news_out();
        }
    }
    XHR.send();
}
function good_queryall(){
    document.getElementById("table_bg").innerText="";
    var XHR=createXHR();
    var v_url="good_manager.php";
    XHR.open('get',v_url,true);
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            var json_v=eval(str);
            var table=document.createElement("table");
            var TR1= document.createElement("tr");
            var TH1=document.createElement("th");
            var TH2=document.createElement("th");
            var TH3=document.createElement("th");
            var TH4=document.createElement("th");
            var TH5=document.createElement("th");
            TH1.innerText="序号";
            TH2.innerText="商品名";
            TH3.innerText="商品价格";
            TH4.innerText="商品库存";
            TH5.innerText="操作";
            TR1.appendChild(TH1);
            TR1.appendChild(TH2);
            TR1.appendChild(TH3);
            TR1.appendChild(TH4);
            TR1.appendChild(TH5);
            table.appendChild(TR1);
            var tbody=document.createElement("tbody");
            table.appendChild(tbody);
            for(var i= 0;i<json_v.length;i++){
                var TR= document.createElement("tr");
                var td1=document.createElement("td");
                var td2=document.createElement("td");
                var td3=document.createElement("td");
                var td4=document.createElement("td");
                var td5=document.createElement("td");
                td1.innerText=json_v[i].gid;
                td2.innerText=json_v[i].gshortname;
                td3.innerText=json_v[i].gprice;
                td4.innerText=json_v[i].gsaved;
                td5.innerHTML="<a href='#' onclick='good_change()'>修改</a>";
                TR.appendChild(td1);
                TR.appendChild(td2);
                TR.appendChild(td3);
                TR.appendChild(td4);
                TR.appendChild(td5);
                table.appendChild(TR);
            }
            table.style.display="block";
            var list=document.getElementById("table_bg");
            list.appendChild(table);
        }
    }
    XHR.send();
}
function good_change(){
    document.getElementById("good_add").style.display="block";
}
function good_out(){
    document.getElementById("good_add").style.display="none";
}
function good_add(){
    var gid=document.getElementById("good_id").value;
    var gname=document.getElementById("good_name").value;
    var gshort=document.getElementById("good_short").value;
    var gprice=document.getElementById("good_price").value;
    var gsaved=document.getElementById("good_saved").value;
    var gcontent=document.getElementById("good_content").value;
    var XHR=createXHR();
    var v_url="good_add.php?gid="+gid+"&gname="+gname+"&gshort="+gshort+"&gprice="+gprice+"&gsaved="+gsaved+"&gcontent="+gcontent;
    XHR.open('get',v_url,true);
    XHR.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            alert(str);
            good_queryall();
            good_out();
        }
    }
    XHR.send();
}
function order_queryall(){
    document.getElementById("table_bg").innerText="";
    var XHR=createXHR();
    var v_url="order_manager.php";
    XHR.open('get',v_url,true);
    XHR.onreadystatechange=function(){
        if(XHR.status==200&&XHR.readyState==4){
            var str=XHR.responseText;
            var json_v=eval(str);
            var table=document.createElement("table");
            var TR1= document.createElement("tr");
            var TH1=document.createElement("th");
            var TH2=document.createElement("th");
            var TH3=document.createElement("th");
            var TH4=document.createElement("th");
            var TH5=document.createElement("th");
            TH1.innerText="订单序号";
            TH2.innerText="商品序号";
            TH3.innerText="总价";
            TH4.innerText="用户序号";
            TH5.innerText="操作";
            TR1.appendChild(TH1);
            TR1.appendChild(TH2);
            TR1.appendChild(TH3);
            TR1.appendChild(TH4);
            TR1.appendChild(TH5);
            table.appendChild(TR1);
            var tbody=document.createElement("tbody");
            table.appendChild(tbody);
            for(var i= 0;i<json_v.length;i++){
                var TR= document.createElement("tr");
                var td1=document.createElement("td");
                var td2=document.createElement("td");
                var td3=document.createElement("td");
                var td4=document.createElement("td");
                var td5=document.createElement("td");
                td1.innerText=json_v[i].oid;
                td2.innerText=json_v[i].pid;
                td3.innerText=json_v[i].count;
                td4.innerText=json_v[i].uid;
                td5.innerHTML="<a href='#' onclick='order_delete("+json_v[i].oid+")'>删除</a>";
                TR.appendChild(td1);
                TR.appendChild(td2);
                TR.appendChild(td3);
                TR.appendChild(td4);
                TR.appendChild(td5);
                table.appendChild(TR);
            }
            table.style.display="block";
            var list=document.getElementById("table_bg");
            list.appendChild(table);
        }
    }
    XHR.send();
}
function order_delete(delid){
    var v1=confirm("确定删除吗？");
    if(v1=true){
        var XHR=createXHR();
        var v_url="order_delete.php?vdelid="+delid;
        XHR.open('get',v_url,true);
        XHR.onreadystatechange=function(){
            if(XHR.status == 200 && XHR.readyState == 4){
                var str = XHR.responseText;
            }
            if(str=="success"){
                document.getElementById("table_bg").innerText="";
                order_queryall();
            }
        }
    }
    XHR.send();
}