<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/manager.js" type="text/javascript"></script>
</head>
<body>
<div class="manager_bg">
    <div id="manager_top">
        <div id="manager_hide"><a href="#">隐藏</a></div>
        <div id="manager_show" onclick="top_show()"><a href="#">显示</a></div>
        <div class="manager_welcome">
            <span>欢迎您</span><span class="manager_span">管理员</span>
            <span>现在为北京时间：<span id="manager_time"></span></span>
            <span>您可以：</span><span onclick="member_queryall()" class="manager_member"><a href="#">会员管理</a> /</span>
            <span class="hover_change" onclick="news_queryall()">新闻管理 </span>/
            <span class="hover_change" onclick="good_queryall()">商品管理 </span>/
            <span class="hover_change" onclick="order_queryall()">订单管理</span>
        </div>
        <a href="login_page.php?page=1"><span id="login_out">注销</span></a>
    </div>
    <div id="table_bg"></div>
</div>
<div id="news_add">
    <br>
    <label>新闻序号：<input type="text" id="news_id"></label><br><br>
    <label>新闻标题：<input type="text" id="news_title"></label><br><br>
    <label>新闻内容：<textarea id="news_content" cols="22" rows="10"></textarea></label><br><br>
    <label>新闻图片：<input type="text" id="news_image"></label><br><br>
    <button onclick="news_add()">确定</button>
    <div id="news_out" class="out" onclick="news_out()">x</div>
</div>
<div id="good_add">
    <br>
    <label>商品序号：<input type="text" id="good_id"></label><br><br>
    <label>商品名称：<input type="text" id="good_name"></label><br><br>
    <label>商品短称：<input type="text" id="good_short"></label><br><br>
    <label>商品价格：<input type="text" id="good_price"></label><br><br>
    <label>商品库存：<input type="text" id="good_saved"></label><br><br>
    <label>商品详细：<textarea id="good_content" cols="22" rows="10"></textarea></label><br><br>
    <button onclick="good_add()">确定</button>
    <div id="good_out" class="out" onclick="good_out()">x</div>
</div>
</body>
</html>