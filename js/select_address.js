var sta_arr=['亚洲','欧洲','大洋洲','美洲','非洲'];
var cou_arr=[['中国','乌兹别克斯坦'],['英国','法国'],['澳大利亚'],['美国','加拿大'],['刚果','索马里']];
var pro_arr=[[['广西省','广东省','上海','北京','台湾省','浙江省'],['未知','还是未知','别选这个啦']],[['苏格兰','英格兰'],['阿尔代什','阿尔卑斯']],[['新南威尔斯州','维多利亚州']],[['加州','华盛顿州','夏威夷州'],['未知','还是未知','别选这个啦']]];
var cit_arr=[[[['南宁','桂林','桂平'],['广州','深圳'],['',''],['',''],['台北','台中'],['杭州']]]];
function state(){
    var v_sel=document.getElementById("state");
    for(var i=0;i<sta_arr.length;i++){
        var v_o=document.createElement("option");
        v_o.innerText=sta_arr[i];
        v_sel.appendChild(v_o);
    }
}
function p_country(){
    var v=document.getElementById("state").value;
    var v_in= sta_arr.indexOf(v);
    var v_sel=document.getElementById("country");
    v_sel.innerText="";
    for(var i=0;i<cou_arr[v_in].length;i++){
        var v_o=document.createElement("option");
        v_o.innerText=cou_arr[v_in][i];
        v_sel.appendChild(v_o);
    }
}
function p_province() {
    var v1 = document.getElementById("country").value;
    var v=document.getElementById("state").value;
    var v_in = sta_arr.indexOf(v);
    var v_in1= cou_arr[v_in].indexOf(v1);
    var v_sel = document.getElementById("province");
    v_sel.innerText = "";
    for (var i = 0; i < pro_arr[v_in][v_in1].length; i++) {
        var v_o = document.createElement("option");
        v_o.innerText = pro_arr[v_in][v_in1][i];
        v_sel.appendChild(v_o);
    }
}
function p_city(){
    var v1 = document.getElementById("country").value;
    var v=document.getElementById("state").value;
    var v2=document.getElementById("province").value;
    var v_in = sta_arr.indexOf(v);
    var v_in1= cou_arr[v_in].indexOf(v1);
    var v_in2= pro_arr[v_in][v_in1].indexOf(v2);
    var v_sel = document.getElementById("city");
    v_sel.innerText = "";
    for (var i = 0; i < cit_arr[v_in][v_in1][v_in2].length; i++) {
        var v_o = document.createElement("option");
        v_o.innerText = cit_arr[v_in][v_in1][v_in2][i];
        v_sel.appendChild(v_o);
    }
}
function write_in(){
    var v=document.getElementById("state").value;
    var v1 = document.getElementById("country").value;
    var v2=document.getElementById("province").value;
    var v3=document.getElementById("city").value;
    var content=v+v1+v2+v3;
    var text=document.getElementById("text_content");
    text.innerText=content;
}