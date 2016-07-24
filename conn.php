<?php
$db_link=mysql_connect("localhost","root","admin")or die("数据库服务器连接失败".mysql_error());
$db=mysql_select_db("myproject",$db_link)or die("数据库连接失败".mysql_error());

//$db_link=mysql_connect("localhost","zjwdb_575993","WOai941225")or die("数据库服务器连接失败".mysql_error());
//$db=mysql_select_db("zjwdb_575993",$db_link)or die("数据库连接失败".mysql_error());
?>