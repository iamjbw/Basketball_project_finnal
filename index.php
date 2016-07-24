<html>
<title>Index</title>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>首页</title>
    <link href="css/css.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/index.js" type="text/javascript"></script>
</head>
<body>
<div class="index_body">
            <?php
            include 'conn.php';
            header("Content-type:text/html;charset=utf-8");
            session_start();
            ?>
    <div class="user_top"></div>
    <div class="container_cover">
        <div class="container">
        <ul class="menu">
            <li><a href="#">首页</a></li>
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
            <li><a href="#">装备推荐</a>
                <ul class="submenu">
                    <li><a href="#">外场装备</a></li>
                    <li><a href="#">内场装备</a></li>
                    <li><a href="#">护具</a></li>
                    <li><a href="#">店铺推荐</a></li>
                    <li><a href="#">运动品牌</a></li>
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
            if(!empty($_SESSION['name'])){
            ?>
            <li><a href="personal_center.php">个人中心</a></li>
            <?php
            }else{
            ?>
            <li><a href="login_page.php?page=1">个人中心</a></li>
            <?php
            }
            ?>
            <li id="about_us"><a href="#">关于</a></li>
        </ul>
    </div>
    </div>
    <ul class="nav">
        <li class="nall"><a href="#">所有</a></li>
        <li class="nball"><a href="#">新闻</a></li>
        <li class="nshoes"><a href="#">篮球鞋</a></li>
        <li class="nshirt"><a href="#">战衣</a></li>
        <li class="ngame"><a href="#">游戏</a></li>
    </ul>
    <div class="inside_body">
        <div class="show">
            <ul class="hot">
            <?php
            $sql="select * from t_index_pic";
            mysql_query("SET NAMES UTF8");
            $result=mysql_query($sql,$db_link);
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']<=3){
            ?>
            <li><div class="hot_cover"><a href="#"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }
            }
            ?>
            </ul>
            <ul class="hot_small hot_small_left">
            <?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>3 && $v1['pid']<=6){
                if($v1['pid']==5){
            ?>
            <li class="li_center"><div class="hot_small_cover"><a href="#"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }else{
            ?>
            <li><div class="hot_small_cover"><a href="shop_area.php"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }
            }
            }
            ?>
        </ul>
            <ul class="hot_small hot_small_right">
            <?php
             $sql="select * from t_index_pic";
             $result=mysql_query($sql,$db_link);
             while($v1=mysql_fetch_array($result)){
             if($v1['pid']>6 && $v1['pid']<=9){
                if($v1['pid']==8){
             ?>
             <li class="li_center"><div class="hot_small_cover"><a href="#"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
             <?php
              }else{
              ?>
              <li><div class="hot_small_cover"><a href="shop_area.php"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
              <?php
              }
              }
              }
              ?>
    </ul>
            <ul class="hot_small_down hot_small_down_left">
            <?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>9 && $v1['pid']<=12){
                if($v1['pid']==11){
            ?>
            <li class="li_center"><div class="hot_small_cover"><a href="#"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }else{
            ?>
            <li><div class="hot_small_cover"><a href="shop_area.php"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }
            }
            }
            ?>
    </ul>
            <ul class="hot_small_down hot_small_down_right">
<?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>12 && $v1['pid']<=15){
                if($v1['pid']==14){
            ?>
            <li class="li_center"><div class="hot_small_cover"><a href="#"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }else{
            ?>
            <li><div class="hot_small_cover"><a href="shop_area.php"><?php echo $v1['pcontent']?></a></div><img src=<?php echo $v1['pimage']?>></li>
            <?php
            }
            }
            }
            ?>
            </ul>
    </div>
        <div class="shoes">
            <div class="shoes_left">
                <div class="shoes_left_pic">
<?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            $i=1;
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>15 && $v1['pid']<=19){
            ?>
            <a href="shop_area.php"><img class=<?php echo "lf$i"?> src=<?php echo $v1['pimage']?>></a>
            <?php
            $i++;
            }
            }
            ?>
                </div>
            </div>
            <div class="shoes_mid">
                <div class="shoes_mid_pic">
<?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            $i=1;
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>19 && $v1['pid']<=23){
            ?>
            <a href="shop_area.php"><img class=<?php echo "mid$i"?> src=<?php echo $v1['pimage']?>></a>
            <?php
            $i++;
            }
            }
            ?>
                </div>
            </div>
            <div class="shoes_right">
                <div class="shoes_right_pic">
<?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            $i=1;
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>23 && $v1['pid']<=27){
            ?>
            <a href="shop_area.php"><img class=<?php echo "ri$i"?> src=<?php echo $v1['pimage']?>></a>
            <?php
            $i++;
            }
            }
            ?>
                </div>
            </div>
            <ul>
                <li class="shoes_circle"></li>
                <li class="shoes_circle"></li>
                <li class="shoes_circle"></li>
                <li class="shoes_circle"></li>
            </ul>
        </div>
        <div class="game">
<?php
            $sql="select * from t_index_pic";
            $result=mysql_query($sql,$db_link);
            $i=1;
            while($v1=mysql_fetch_array($result)){
            if($v1['pid']>27 && $v1['pid']<=31){
            ?>
            <a href="#"><img class=<?php echo "game$i"?> src=<?php echo $v1['pimage']?>></a>
            <?php
            $i++;
            }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
