<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>装备交易区</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/shop_area.js"></script>
    <style>
    </style>
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
            <li><a href="#">装备交易区</a>
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
                <li><a href="login_page.php?page=3">个人中心</a></li>
            <?php
            }
            ?>
            <li id="about_us"><a href="#">关于</a></li>
        </ul>
    </div>
    <div class="shop_body">
        <div class="banner_scroll">
            <ul class="banner">
                <li><a href="single_product.php?gid=<?php echo "1"?>"><img src="images/banner1.png"></a></li>
                <li><a href="single_product.php?gid=<?php echo "2"?>"><img src="images/banner2.png"></a></li>
                <li><a href="single_product.php?gid=<?php echo "3"?>"><img src="images/banner3.png"></a></li>
                <li><a href="single_product.php?gid=<?php echo "4"?>"><img src="images/banner4.png"></a></li>
                <li><a href="single_product.php?gid=<?php echo "5"?>"><img src="images/banner5.png"></a></li>
            </ul>
        </div>
        <span class="right_button"></span><span class="left_button"></span>
        <div class="radius">
            <div class="radius_choose">欢迎选择您喜欢的装备：</div>
            <span class="radius1"><div class="radius_cover"></div><p>战靴</p></span>
            <span class="radius2"><div class="radius_cover"></div><p>球衣</p></span>
            <span class="radius3"><div class="radius_cover"></div><p>护具</p></span>
            <span class="radius4"><div class="radius_cover"></div><p>专业配件</p></span>
        </div>
        <div class="banner_down">
            <ul>
<?php
                $sql="select * from t_goods";
                mysql_query("SET NAMES UTF8");
                $result=mysql_query($sql,$db_link) or die(mysql_error());
                while($v1=mysql_fetch_array($result)){
                if($v1['gid']<10){
                if($v1['gid']==1 || $v1['gid']==4 || $v1['gid']==7){
            ?>
                <li class="first"><div class="down_go"><a href="single_product.php?gid=<?php echo $v1['gid']?>">去看看</a></div><div class="shoes_name"><span><?php echo $v1['gname']?></span><br><span class="color-dark"><?php echo $v1['gshortname']?></span></div>
                <a href="single_product.php?gid=<?php echo $v1['gid']?>"><img src=<?php echo $v1['small-image2']?>></a>
                <div class="shoes_down"><div>￥<span><?php echo $v1['gprice']?></span></div><button><a href="single_product.php?gid=<?php echo $v1['gid']?>">立即购买</a></button><button>加入购物车</button>
                </div>
                </li>
                <?php
                }else{
                ?>
                <li><div class="down_go"><a href="single_product.php?gid=<?php echo $v1['gid']?>">去看看</a></div><div class="shoes_name"><span><?php echo $v1['gname']?></span><br><span class="color-dark"><?php echo $v1['gshortname']?></span></div>
                <a href="single_product.php?gid=<?php echo $v1['gid']?>"><img src=<?php echo $v1['small-image2']?>></a>
                <div class="shoes_down"><div>￥<span><?php echo $v1['gprice']?></span></div><button><a href="single_product.php?gid=<?php echo $v1['gid']?>">立即购买</a></button><button>加入购物车</button>
                </div>
                </li>
                <?php
                }
                }
                }
                ?>
            </ul>
        </div>
        <div class="down_logo">
            <div><img src="images/down_logo1.jpg"><p>订单将免费为你使用最快的方式进行配送</p></div>
            <div><img src="images/down_logo2.jpg"><p>客服电话：<span class="color_y">15754605685</span>&nbsp;&nbsp;&nbsp;客服QQ：<span class="color_y">53793156</span></p></div>
            <div><img src="images/down_logo3.jpg"><p>本站承诺15天无理由免费退换货</p></div>
        </div>
    </div>
</div>
</body>
</html>