<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>运动资讯区</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/news.js"></script>
</head>
<body>
<div class="single_body news_body">
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
            <li><a href="#">运动资讯区</a>
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
            if(!empty($_SESSION['name'])){
            ?>
            <li><a href="personal_center.php">个人中心</a></li>
            <?php
            }else{
            ?>
            <li><a href="login_page.php?page=2">个人中心</a></li>
            <?php
            }
            ?>
            <li id="about_us"><a href="#">关于</a></li>
        </ul>
    </div>
<div class="wrapper col1">
    <div id="header">
        <div class="fl_left">
            <h1><a href="#">运动资讯中心</a></h1>
            <p>为您提供最新最全的篮球咨询</p>
        </div>
        <div class="fl_right"><a href="#"><img src=""></a></div>
        <br class="clear">
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <div id="featured_post">
                <div class="news_banner">
                    <span class="news_button_right">&lt</span><span class="news_button_left">&gt</span>
                    <ul>
                    <?php
                    $sql="select * from t_news";
                    mysql_query("SET NAMES UTF8");
                    $result=mysql_query($sql,$db_link);
                    while($v1=mysql_fetch_array($result)){
                    if($v1['nid']<=5){
                    ?>
                        <li>
                            <img src=<?php echo $v1['nimage']?>>
                            <p><?php echo $v1['ntitle'];?><a href="#"></a></p>
                            <p><?php echo $v1['ncontent'];?></p>
                        </li>
                     <?php
                     }
                     }
                     ?>
                    </ul>
                </div>
            </div>
            <div id="hpage_latest">
                <ul>
                <?php
                    $sql="select * from t_news";
                    mysql_query("SET NAMES UTF8");
                    $l_result=mysql_query($sql,$db_link);
                    while($v2=mysql_fetch_array($l_result)){
                    if($v2['nid']>10 && $v2['nid']<=13){
                ?>
                    <li><img src=<?php echo $v2['nimage']?>>
                        <p><a href="#"><?php echo $v2['ntitle']?></a></p>
                        <p><?php echo $v2['ncontent']?></p>
                        <p class="readmore"><a href="#">更多 &raquo;</a></p>
                    </li>
                <?php
                }
                }
                ?>
                </ul>
                <br class="clear">
            </div>
        </div>
        <div id="column">
            <ul id="latestnews">
                <?php
                    $sql="select * from t_news";
                    mysql_query("SET NAMES UTF8");
                    $t_result=mysql_query($sql,$db_link);
                    while($v3=mysql_fetch_array($t_result)){
                    if($v3['nid']>5 && $v3['nid']<=10){
                ?>
                <li><img src=<?php echo $v3['nimage']?>>
                    <p><strong><a href="#"><?php echo $v3['ntitle']?></a></strong><?php echo $v3['ncontent']?></p>
                </li>
                <?php
                }
                }
                ?>
            </ul>
        </div>
        <br class="clear">
    </div>
    <br class="clear">
</div>
<div class="wrapper col5">
    <div class="gallery">
        <ul>
        <?php
                    $sql="select * from t_news";
                    mysql_query("SET NAMES UTF8");
                    $p_result=mysql_query($sql,$db_link) or die(mysql_error());
                    while($v4=mysql_fetch_array($p_result)){
                    if($v4['nid']>13 && $v4['nid']<=23){
                        if($v4['nid']==18 || $v4['nid']==23){
         ?>
            <li class="last"><a href="#"><img src=<?php echo $v4['nimage']?>></a></li>
         <?php
         }else{
         ?>
            <li><a href="#"><img src=<?php echo $v4['nimage']?>></a></li>
         <?php
         }
         }
         }
         ?>
        </ul>
        <br class="clear">
    </div>
</div>
<div class="wrapper col6">
<div id="footer">
        <div class="footbox twitter">
            <h2>资深名记</h2>
            <ul>
                <li><a href="#">@黎富江&nbsp;</a>公牛引得强援，韦德2400万年薪终入公牛</li>
                <li><a href="#">@张卫平&nbsp;</a>公牛引得强援，韦德2400万年薪终入公牛</li>
                <li><a href="#">@马健&nbsp;</a>公牛引得强援，韦德2400万年薪终入公牛</li>
                <li><a href="#">@周志&nbsp;</a>公牛引得强援，韦德2400万年薪终入公牛</li>
                <li><a href="#">@柯凡&nbsp;</a>公牛引得强援，韦德2400万年薪终入公牛</li>
            </ul>
        </div>
        <div class="footbox flickr">
            <h2>球队</h2>
            <ul>
                <li><a href="#"><img src="images/team1.jpg"></a></li>
                <li><a href="#"><img src="images/team2.jpg"></a></li>
                <li><a href="#"><img src="images/team3.jpg"></a></li>
                <li><a href="#"><img src="images/team4.jpg"></a></li>
                <li><a href="#"><img src="images/team5.jpg"></a></li>
                <li><a href="#"><img src="images/team6.jpg"></a></li>
                <li><a href="#"><img src="images/team7.jpg"></a></li>
                <li><a href="#"><img src="images/team8.jpg"></a></li>
            </ul>
            <br class="clear">
        </div>
        <div class="footbox posts">
            <h2>球队新闻</h2>
            <ul>
                <li><a href="#">洛杉矶湖人队&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">迈阿密热火&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">克利夫兰骑士&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">洛杉矶快船&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">印第安纳步行者&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">布鲁克林篮网&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">圣安东尼奥马刺&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#">芝加哥公牛&nbsp;&nbsp;&nbsp;</a></li>
                <li class="last"><a href="#">新奥尔良黄蜂&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
        <div class="footbox banners last">
            <h2>周边新闻</h2>
            <ul>
                <li><a href="#"><img src="images/others1.jpg"></a></li>
                <li><a href="#"><img src="images/others2.jpg"></a></li>
            </ul>
        </div>
        <br class="clear">
    </div>
</div>
</div>
</body>
</html>
