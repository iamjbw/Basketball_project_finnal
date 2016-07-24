<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详细</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/single_product.js"></script>
    <script src="js/jq_zoom1.5.js"></script>
</head>
<body>
<div class="single_body">
    <div class="container">
            <ul class="menu">
                <li><a href="index.php" id="index">首页</a></li>
                <li><a href="#">篮球明星区</a>
                    <ul class="submenu">
                        <li><a href="#">科比</a></li>
                        <li><a href="#">詹姆斯</a></li>
                        <li><a href="#">保罗</a></li>
                        <li><a href="#">库里</a></li>
                        <li><a href="#">杜兰特</a></li>
                        <li><a href="#">威斯布鲁克</a></li>
                        <li><a href="#">欧文</a></li>
                        <li><a href="#">利拉德</a></li>
                    </ul>
                </li>
                <li class="active"><a href="#">球队讨论区</a>
                    <ul class="submenu">
                        <li><a href="#">湖人</a></li>
                        <li><a href="#">骑士</a></li>
                        <li><a href="#">勇士</a></li>
                        <li><a href="#">雷霆</a></li>
                        <li><a href="#">马刺</a></li>
                        <li><a href="#">火箭</a></li>
                        <li><a href="#">公牛</a></li>
                    </ul>
                </li>
                <li><a href="#">装备讨论区</a>
                    <ul class="submenu">
                        <li><a href="#">篮球鞋</a></li>
                        <li><a href="#">明星战衣</a></li>
                        <li><a href="#">篮球</a></li>
                        <li><a href="#">护具</a></li>
                        <li><a href="#">袜子</a></li>
                    </ul>
                </li>
                <li><a href="news.php">运动资讯区</a>
                    <ul class="submenu">
                        <li><a href="#">球星</a></li>
                        <li><a href="#">球队</a></li>
                        <li><a href="#">NBA选秀</a></li>
                        <li><a href="#">周边新闻</a></li>
                    </ul>
                </li>
                <li><a href="#">识货店铺</a>
                    <ul class="submenu">
                        <li><a href="#">名店</a></li>
                        <li><a href="#">高级装备</a></li>
                        <li><a href="#">二级护具</a></li>
                        <li><a href="#">店铺推荐</a></li>
                        <li><a href="#">店铺评价</a></li>
                    </ul>
                </li>
                <li><a href="shop_area.php">装备交易区</a>
                    <ul class="submenu">
                        <li><a href="#">篮球鞋</a></li>
                        <li><a href="#">明星战衣</a></li>
                        <li><a href="#">篮球</a></li>
                        <li><a href="#">护具</a></li>
                        <li><a href="#">袜子</a></li>
                        <li><a href="#">二手货</a></li>
                        <li><a href="#">纪念品</a></li>
                        <li><a href="#">游戏</a></li>
                    </ul>
                </li>
 <?php
                include 'conn.php';
                @session_start();
                if(!empty($_SESSION["id"])){
            ?>
                <li><a href="personal_center.php">个人中心</a></li>
            <?php
            }else{
            ?>
                <li><a href="login.html">个人中心</a></li>
            <?php
            }
            ?>
                <li id="about_us"><a href="#">关于</a></li>
            </ul>
        </div>
    <div class="product_show">
        <div class="product_left_side">
            <ul class="product_left">
                <div>鞋类</div>
                <li><input type="checkbox" checked="checked"><a href="#">脚上装备 (130)</a></li>
                <li><label><input type="checkbox"><a href="#">篮球鞋 (76)</a></label></li>
                <li><label><input type="checkbox"><a href="#">全明星战靴 (27)</a></label></li>
                <li><label><input type="checkbox"><a href="#">限量战靴 (26)</a></label></li>
                <li><label><input type="checkbox"><a href="#">其他 (4)</a></label></li>
            </ul>
            <ul class="product_left">
                <div>衣服</div>
                <li><label><input type="checkbox" checked="checked"><a href="#">全部球衣 (67)</a></label></li>
                <li><label><input type="checkbox"><a href="#">热销球衣 (47)</a></label></li>
                <li><label><input type="checkbox"><a href="#">周边球衣 (22)</a></label></li>
                <li><label><input type="checkbox"><a href="#">球衣订制 (6)</a></label></li>
            </ul>
            <ul class="product_left">
                <div>护具</div>
                <li><label><input type="checkbox" checked="checked"><a href="#">品牌护具 (28)</a></label></li>
                <li><label><input type="checkbox"><a href="#">护膝 (12)</a></label></li>
                <li><label><input type="checkbox"><a href="#">护踝 (10)</a></label></li>
                <li><label><input type="checkbox"><a href="#">高级护膝 (2)</a></label></li>
                <li><label><input type="checkbox"><a href="#">护腕 护指 (4)</a></label></li>
            </ul>
        </div>
        <div class="product_right_side">
        <div class="open_img"><img src=""></div>
            <div class="left_pic_show">
            <?php
                $v_gid=$_GET['gid'];
                $sql="select * from t_goods where gid=$v_gid";
                mysql_query("SET NAMES UTF8");
                $result=mysql_query($sql,$db_link) or die(mysql_error());
                while($v1=mysql_fetch_array($result)){
            ?>
            <div class="pic_big">
            <img src=<?php echo $v1['small-image1']?>>
            <div class="small_block"></div>
            </div>
            <ul class="pic_small">
                <li><a href="#"><img src=<?php echo $v1['small-image1']?>></a></li>
                <li><a href="#"><img src=<?php echo $v1['small-image2']?>></a></li>
                <li><a href="#"><img src=<?php echo $v1['small-image3']?>></a></li>
                <li><a href="#"><img src=<?php echo $v1['small-image4']?>></a></li>
                <li><a href="#"><img src=<?php echo $v1['small-image5']?>></a></li>
            </ul>
                <span class="small_point_left">&lt</span><span class="small_point_right">&gt</span>
        </div>
            <div class="right_side_content">
                <div class="product_name"><?php echo $v1['gname']?></div>
                <div id="product_price">￥<span><?php echo $v1['gprice']?></span></div><br>
                <span>请选择您需要的尺码</span>
                <ul>
                    <li><a href="#">41</a></li>
                    <li><a href="#">42</a></li>
                    <li><a href="#">43</a></li>
                    <li><a href="#">44</a></li>
                </ul><br>
                <div class="saved">库存(<span><?php echo $v1['gsaved']?></span>件)</div>
                <div class="product_number">
                    数量：<span class="reduce"><a href="#">-</a></span><input type="text" value="1"><span class="plus"><a href="#">+</a></span>
                </div>
                <button id="buy_now"><a href="#">立即购买</a></button>
                <button><a href="#">加入购物车</a></button>
                <div class="product_content">
                <input type="hidden" value=<?php echo $v1['gid']?> id="hide_gid">
                <?php
                if(!empty($_SESSION["id"])){
                ?>
                <input type="hidden" value=<?php echo $_SESSION["id"]?> id="hide_uid">
                <?php
                }
                ?>
                    <?php echo $v1['gcontent']?>
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="product_down">
            <span class="point_left">&lt</span><span class="point_right">&gt</span>
                <ul>
                    <?php
                    $d_sql="select * from t_goods";
                    mysql_query("SET NAMES UTF8");
                    $d_result=mysql_query($d_sql,$db_link) or die(mysql_error());
                    while($v2=mysql_fetch_array($d_result)){
                    ?>
                    <li><a href="#"><img src=<?php echo $v2['small-image2']?>></a>
                    <div class="down_content">
                        <span class="it_name"><?php echo $v2['gshortname'];?></span><br><span class="it_price">￥<span><?php echo $v2['gprice']?></span></span></div>
                </li>
                    <?php
                    }
                    ?>

        </ul></div>
    </div>
<div class="down_logo">
                <div><img src="images/down_logo1.jpg"><span>订单将免费为你使用最快的方式进行配送</span></div>
                <div><img src="images/down_logo2.jpg"><span></span>客服电话：<span class="color_y">15754605685</span>&nbsp;&nbsp;&nbsp;客服QQ：<span class="color_y">53793156</span></div>
                <div><img src="images/down_logo3.jpg"><span>本站承诺15天无理由免费退换货</span></div>
            </div>
</div>
</body>
</html>