/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : myproject

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2016-07-21 22:59:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_goods`
-- ----------------------------
DROP TABLE IF EXISTS `t_goods`;
CREATE TABLE `t_goods` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `gshortname` varchar(20) DEFAULT NULL,
  `gname` varchar(100) DEFAULT NULL,
  `gcontent` varchar(1000) DEFAULT NULL,
  `gprice` float(10,0) DEFAULT NULL,
  `gsaved` int(10) DEFAULT NULL,
  `small-image1` varchar(200) DEFAULT NULL,
  `small-image2` varchar(200) DEFAULT NULL,
  `small-image3` varchar(200) DEFAULT NULL,
  `small-image4` varchar(200) DEFAULT NULL,
  `small-image5` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_goods
-- ----------------------------
INSERT INTO `t_goods` VALUES ('1', 'SG-Curry2', '全明星战靴系列-库里战靴，SG-Curry2', '库里二代篮球鞋，秉承先进的设计理念，超前的技术融合，利用核心科技与前沿技术为NBA超级巨星，史蒂芬·库里量身打造的一款球鞋，外皮采用UA所特有speedfoam外皮科技,兼顾重量和速度，保护以及爆发于一体，外观炫酷，易于搭配，在性能方面，比一代战靴更加柔软，但是更具有保护性，高高的鞋帮的大大的降低脚踝由于大动作突破的受伤可能性,无论是性能还是外观这款战靴实在是实战以及压马路的一代神器。', '1466', '20', 'images/product_image/curry_small1.jpg', 'images/product_image/curry_small2.jpg', 'images/product_image/curry_small3.jpg', 'images/product_image/curry_small4.jpg', 'images/product_image/curry_small5.jpg');
INSERT INTO `t_goods` VALUES ('2', 'LBJ-james13', '全明星战靴系列-詹姆斯战靴，LBJ-James13', '为季后赛打造的精英版球鞋也即将正式上架发售。詹姆斯的 LeBron 13 Elite 带来了颠覆性的更新，超高的硬件配备，以及最新的科技应用，让 LeBron 13 Elite 得以能够继续领跑高性能篮球鞋，依然是一双性能怪兽。\r\n\r\n抛弃了 Megafuse + Posite 的经典搭配，此番以更为轻质和强韧的 Kurim 网格面料呈现，碳板的延伸直接包裹鞋身，在支撑性方面也得到了进一步的提升。\r\n\r\n首发三款配色，其中的 LeBron 13 Elite “Red” 将作为广告色在 4 月 14 日首发，随后的白金配色和黑银配色将分别在 5 月 5 日和 5 月 26 日发售。球鞋前掌配置轻薄的 Nike Zoom Air 气垫，提供不错的回弹系统，后跟搭载可视 Max Air 180 气垫，为球鞋提供了良好的减震缓冲能力，性能极佳。在散热方面，一体式内靴采用透气网眼布材质，你丝毫不比担心闷热的情况出现，同时还提供准确支撑和出色灵活表现。在实战球场，这双球鞋能够带来不管是在性能散热方面，还是外观方面，都会有非常不错的体验。', '1299', '102', 'images/product_image/james1.jpg', 'images/product_image/james2.jpg', 'images/product_image/james3.jpg', 'images/product_image/james4.jpg', 'images/product_image/james5.jpg');
INSERT INTO `t_goods` VALUES ('3', 'KBOE-zk9', '全明星战靴系列-科比战靴，KOBE-zk9', '耐克始终坚持通过创新科技让运动员有更出色的表现，而万众瞩目的KOBE 9 ELITE就是最好的验证。同时，耐克将设计推向极致的热情，也通过KOBE 9 ELITE的细节中得到充分的证明。一些小的细节无论是对于篮球还是对于设计都至关重要。科比的密码体现在每一双球鞋上，在中底的外侧和内侧都有。在外侧的密码是：Masterpiece，在内侧的密码则为：Veni, vidi, vici，它是一句极具启发意义的拉丁文谚语，译为：“我来了，我看见了，我征服了。”', '1699', '11', 'images/product_image/kobe1.jpg', 'images/product_image/kobe2.jpg', 'images/product_image/kobe3.jpg', 'images/product_image/kobe4.jpg', 'images/product_image/kobe5.jpg');
INSERT INTO `t_goods` VALUES ('4', 'WADE-4', '全明星战靴系列-韦德战靴，WDAE-wd4', '鞋后跟内侧的“ZZDG”分别代表韦德儿子Zaire、Zion，侄子Dada以及女朋友Gabrielle的名字首字母，鞋底的91，代表韦德祖母的年龄、11105则代表11岁的儿子Zaire、10岁的侄子Dada和5岁的儿子Zion。韦德的个人logo在鞋大底的扭转区与鞋舌内侧遥相呼应。为了将“韦德之道”打造成最高水准的专业篮球鞋，产品还具备以下特征：头层真皮材料鞋面，配合极具现代感的强化TPU亮面鞋眼片，在强调高贵品质的同时满足了韦德对脚面的保护需求。高耐磨橡胶大底在提升摩擦力的基础上尽量减轻鞋的重量。中足碳纤维板（球员版则延伸至全掌），中足区的3D外露结构，为“韦德之道”提供卓越的脚部支撑和韧性。前掌中部内嵌的李宁传统的“Bounse”科技保证最大限度的能量回弹。模压EVA提供稳定的中底平台。李宁经典的“Cushion”科技增加足跟部减震。后跟外缘的TPU支撑结构辅以鞋内包裹后跟的Femack缝线技术，为韦德脚部提供良好的包裹和稳定的支撑。', '569', '120', 'images/product_image/wade1.jpg', 'images/product_image/wade2.jpg', 'images/product_image/wade3.jpg', 'images/product_image/wade4.jpg', 'images/product_image/wade5.jpg');
INSERT INTO `t_goods` VALUES ('5', 'AIRJORDAN-aj29', '全明星战靴系列-威少战靴，AIRJORDAN-aj29', '鞋子作为我们人类很早就开始使用的东西，形状和功能一直没有太多的变化，所以air jordan的发展应该遵循朝品质化的发展道路，你见过哪个百年奢侈品牌在自己的包包或是鞋子上搂出个窟窿说这是可以传达精神力量的，再一次强调！我们不是一年一换的数码产品，我们是奢侈品牌！\r\n     再来说一说今年的鞋子，纺织材料的鞋面虽然比不上牛皮，但能最大限度让接下来的花纹设计层层叠叠淋漓精致的表现在鞋面上，这是现在NIKE的设计思路，每次发布会出一个乞丐版的版本让人直呼想吐，可没过几天上一个新配色众屌丝又都要跪舔了（大家太熟悉这种戏码了）！鞋子采用中帮，鞋型又回归到AJ13以前中规中矩的设计风格（就应该这样!)，复杂的科技工艺设计全部集中在鞋底，（球鞋最大功能发挥的地方，所谓科学技术最应该使用的地方），进一步改进广受好评的Flight Plate，成为真正的顶级技术。\r\n   最后那个巨大的23和飞人LOGO有人说好像生怕别人看不见，我的意见是：我们就是那么土豪！air jordan所有的科技和噱头都是为这个数字和LOGO服务的，从今以后AIRJORDAN的唯一中心也只有是这个数字和LOGO!', '1899', '67', 'images/product_image/ajx1.jpg', 'images/product_image/ajx2.jpg', 'images/product_image/ajx3.jpg', 'images/product_image/ajx4.jpg', 'images/product_image/ajx5.jpg');
INSERT INTO `t_goods` VALUES ('6', 'IRVING-ki2', '全明星战靴系列-欧文战靴，IRVING-ki2', 'Kyrie 2 凯里欧文的第二代签名战靴终于在今天发布。为了支撑欧文在场上各种突破物理极限的技术动作，Kyrie 2 在设计上采用了前所未有的曲面中底及大底设计，专为增强倾斜程度和突破动作而特别打造。欧文惊人的加速、减速、变向造就了球场上极富杀伤力的攻击点，他的身体也因此需要承受 4 倍的重力加速度。Kyrie 2 由 Leo Chang 张传禧操刀设计，无论是鞋身轮廓还是环绕绑带，无论是抓地大底还是独特的鞋帮呈现，都定位高性能实战，为欧文的场上拼杀带来稳定而全方位的支持。', '769', '80', 'images/product_image/iv1.jpg', 'images/product_image/iv2.jpg', 'images/product_image/iv3.jpg', 'images/product_image/iv4.jpg', 'images/product_image/iv5.jpg');
INSERT INTO `t_goods` VALUES ('7', 'MELO-M12', '全明星战靴系列-安东尼战靴，MELO-M12', '卡梅隆-安东尼 12代战靴', '1399', '207', 'images/product_image/at1.jpg', 'images/product_image/at2.jpg', 'images/product_image/at3.jpg', 'images/product_image/at4.jpg', 'images/product_image/at5.jpg');
INSERT INTO `t_goods` VALUES ('8', 'CP3-CP3-9', '全明星战靴系列-保罗战靴，CP3-CP3-9', '克里斯-保罗 9代战靴', '1299', '99', 'images/product_image/cp1.jpg', 'images/product_image/cp2.jpg', 'images/product_image/cp3.jpg', 'images/product_image/cp4.jpg', 'images/product_image/cp5.jpg');
INSERT INTO `t_goods` VALUES ('9', 'KD-kd7', '全明星战靴系列-杜兰特战靴，KD-kd7', '凯文-杜兰特 7代战靴', '1276', '102', 'images/product_image/kd1.jpg', 'images/product_image/kd2.jpg', 'images/product_image/kd3.jpg', 'images/product_image/kd4.jpg', 'images/product_image/kd5.jpg');
INSERT INTO `t_goods` VALUES ('10', 'HY-hd2015', '全明星战靴系列-乔治战靴，HY-hd2015', 'HD2015', '899', '45', 'images/product_image/hd1.jpg', 'images/product_image/hd2.jpg', 'images/product_image/hd3.jpg', 'images/product_image/hd4.jpg', 'images/product_image/hd5.jpg');
INSERT INTO `t_goods` VALUES ('11', '123', '123', '', '123', '1231', null, null, null, null, null);

-- ----------------------------
-- Table structure for `t_index_pic`
-- ----------------------------
DROP TABLE IF EXISTS `t_index_pic`;
CREATE TABLE `t_index_pic` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pcontent` varchar(100) DEFAULT NULL,
  `pimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_index_pic
-- ----------------------------
INSERT INTO `t_index_pic` VALUES ('1', '球鞋订做', 'images/hot_1.png');
INSERT INTO `t_index_pic` VALUES ('2', '球鞋订做', 'images/hot_2.png');
INSERT INTO `t_index_pic` VALUES ('3', '球鞋订做', 'images/hot_3.png');
INSERT INTO `t_index_pic` VALUES ('4', '库里', 'images/hot_small_1.png');
INSERT INTO `t_index_pic` VALUES ('5', '詹姆斯', 'images/hot_small_2.png');
INSERT INTO `t_index_pic` VALUES ('6', '匡威休闲', 'images/hot_small_3.png');
INSERT INTO `t_index_pic` VALUES ('7', '投篮之星', 'images/hot_small_4.png');
INSERT INTO `t_index_pic` VALUES ('8', '保罗', 'images/hot_small_5.png');
INSERT INTO `t_index_pic` VALUES ('9', '韦德', 'images/hot_small_6.png');
INSERT INTO `t_index_pic` VALUES ('10', 'Air Jordan', 'images/hot_small_7.png');
INSERT INTO `t_index_pic` VALUES ('11', '科比', 'images/hot_small_8.png');
INSERT INTO `t_index_pic` VALUES ('12', 'Air Jordan', 'images/hot_small_9.png');
INSERT INTO `t_index_pic` VALUES ('13', 'ANTA', 'images/hot_small_10.png');
INSERT INTO `t_index_pic` VALUES ('14', '麦蒂', 'images/hot_small_11.png');
INSERT INTO `t_index_pic` VALUES ('15', '杜兰特', 'images/hot_small_12.png');
INSERT INTO `t_index_pic` VALUES ('16', null, 'images/shoes1.png');
INSERT INTO `t_index_pic` VALUES ('17', null, 'images/shoes4.png');
INSERT INTO `t_index_pic` VALUES ('18', null, 'images/shoes7.png');
INSERT INTO `t_index_pic` VALUES ('19', null, 'images/shoes10.png');
INSERT INTO `t_index_pic` VALUES ('20', null, 'images/shoes2.png');
INSERT INTO `t_index_pic` VALUES ('21', null, 'images/shoes5.png');
INSERT INTO `t_index_pic` VALUES ('22', null, 'images/shoes8.png');
INSERT INTO `t_index_pic` VALUES ('23', null, 'images/shoes11.png');
INSERT INTO `t_index_pic` VALUES ('24', null, 'images/shoes3.png');
INSERT INTO `t_index_pic` VALUES ('25', null, 'images/shoes6.png');
INSERT INTO `t_index_pic` VALUES ('26', null, 'images/shoes9.png');
INSERT INTO `t_index_pic` VALUES ('27', null, 'images/shoes12.png');
INSERT INTO `t_index_pic` VALUES ('28', null, 'images/game1.jpg');
INSERT INTO `t_index_pic` VALUES ('29', null, 'images/game2.jpg');
INSERT INTO `t_index_pic` VALUES ('30', null, 'images/game3.jpg');
INSERT INTO `t_index_pic` VALUES ('31', null, 'images/game4.jpg');

-- ----------------------------
-- Table structure for `t_news`
-- ----------------------------
DROP TABLE IF EXISTS `t_news`;
CREATE TABLE `t_news` (
  `nid` int(10) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(100) DEFAULT NULL,
  `ncontent` text,
  `nimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_news
-- ----------------------------
INSERT INTO `t_news` VALUES ('1', '记忆中的那些总决赛，充满了紧张和刺激，今天让我们来回顾十大令人窒息的时刻', '记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！', 'images/news_banner1.jpg');
INSERT INTO `t_news` VALUES ('2', '记忆中的那些总决赛，充满了紧张和刺激，今天让我们来回顾十大令人窒息的时刻', '记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！', 'images/news_banner2.jpg');
INSERT INTO `t_news` VALUES ('3', '记忆中的那些总决赛，充满了紧张和刺激，今天让我们来回顾十大令人窒息的时刻', '记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！', 'images/news_banner3.jpg');
INSERT INTO `t_news` VALUES ('4', '记忆中的那些总决赛，充满了紧张和刺激，今天让我们来回顾十大令人窒息的时刻', '记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！', 'images/news_banner4.jpg');
INSERT INTO `t_news` VALUES ('5', '记忆中的那些总决赛，充满了紧张和刺激，今天让我们来回顾十大令人窒息的时刻', '记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！记忆中的那些总决赛，充满了紧张和刺激，在NBA总决赛赛场上充满激情与难以预料的可能性，谁能问鼎NBA，捧起总冠军奖杯，不到最后一刻，永远都没有定论，成王败寇？是王是熊？往往就在那令人窒息的几秒内，今天就让我们一起来回顾历史上那些令人窒息的时刻！', 'images/news_banner5.jpg');
INSERT INTO `t_news` VALUES ('6', '公牛引得强援，韦德2400万年薪终入公牛', '芝加哥公牛队通过一年2400万年薪的合同成功将韦德从自由市场吸引到了公牛，并希望以此深化阵容，冲击下赛季的总冠军', 'images/team1.jpg');
INSERT INTO `t_news` VALUES ('7', '欧文:是勒布朗教会了我如何更加职业化', '这位三届全明星球员在总决赛7场比赛中，场均能砍下27分4篮板4助攻2抢断，他在第七场比赛的最后时刻，面对库里防守下的高难度三分准绝杀堪称今年骑士夺冠的最重要的一个进球。', 'images/team2.jpg');
INSERT INTO `t_news` VALUES ('8', '小沃顿赞湖人榜眼现象级：在场上他是个领袖', '拉塞尔无疑是湖人队在今年夏季联赛中最闪耀的明星，并且展现出了他的统治力。四场比赛，拉塞尔场均得到21.8分、6.2个篮板和4次助攻，投篮命中率为48%。', 'images/team3.jpg');
INSERT INTO `t_news` VALUES ('9', '库班：从未担心德克离队 不赞成联盟限制砍鲨', '“诺维茨基哪里也不会去，”库班说，“诺维茨基和达拉斯，达拉斯和诺维茨基。”', 'images/team4.jpg');
INSERT INTO `t_news` VALUES ('10', '莱利不担心韦德出走 对热火年轻化充满信心', '帕特-莱利拒绝为韦德开出高薪，直接导致闪电侠加盟芝加哥公牛。虽然不愿意为老将开出高薪，不过热火在续约怀特塞德以及泰勒-约翰逊的时候显得并不吝啬。', 'images/team5.jpg');
INSERT INTO `t_news` VALUES ('11', 'SG-Curry2', '库里二代篮球鞋，秉承先进的设计理念，超前的技术融合，利用核心科技与前沿技术为NBA超级巨星，史蒂芬·库里量身打造的一款球鞋，外皮采用UA所特有speedfoam外皮科技,兼顾重量和速度，保护以及爆发于一体，外观炫酷，易于搭配，在性能方面，比一代战靴更加柔软，但是更具有保护性，高高的鞋帮的大大的降低脚踝由于大动作突破的受伤可能性,无论是性能还是外观这款战靴实在是实战以及压马路的一代神器。', 'images/shoes_new1.jpg');
INSERT INTO `t_news` VALUES ('12', 'LBJ-james13', '此番以更为轻质和强韧的 Kurim 网格面料呈现，在支撑性方面也得到了进一步的提升。Nike Zoom Air 气垫，提供不错的回弹系统，后跟搭载可视 Max Air 180 气垫，为球鞋提供了良好的减震缓冲能力，性能极佳。在散热方面，一体式内靴采用透气网眼布材质，你丝毫不必担心闷热的情况出现，同时还提供准确支撑和出色灵活表现。在实战球场，这双球鞋能够带来不管是在性能散热方面，还是外观方面，都会有非常不错的体验。', 'images/shoes_new2.jpg');
INSERT INTO `t_news` VALUES ('13', 'AIRJORDAN-aj29', '   最后那个巨大的23和飞人LOGO有人说好像生怕别人看不见，我的意见是：我们就是那么土豪！air jordan所有的科技和噱头都是为这个数字和LOGO服务的，从今以后AIRJORDAN的唯一中心也只有是这个数字和LOGO!', 'images/shoes_new3.jpg');
INSERT INTO `t_news` VALUES ('14', null, null, 'images/player1.jpg');
INSERT INTO `t_news` VALUES ('15', '2', '啊', 'images/player2.jpg');
INSERT INTO `t_news` VALUES ('16', null, null, 'images/player3.jpg');
INSERT INTO `t_news` VALUES ('17', null, null, 'images/player4.jpg');
INSERT INTO `t_news` VALUES ('18', null, null, 'images/player5.jpg');
INSERT INTO `t_news` VALUES ('19', null, null, 'images/player6.jpg');
INSERT INTO `t_news` VALUES ('20', null, null, 'images/player7.jpg');
INSERT INTO `t_news` VALUES ('21', null, null, 'images/player8.jpg');
INSERT INTO `t_news` VALUES ('22', null, null, 'images/player9.jpg');
INSERT INTO `t_news` VALUES ('23', null, null, 'images/player10.jpg');

-- ----------------------------
-- Table structure for `t_orderform`
-- ----------------------------
DROP TABLE IF EXISTS `t_orderform`;
CREATE TABLE `t_orderform` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `price` float(10,0) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `count` float(10,0) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_orderform
-- ----------------------------
INSERT INTO `t_orderform` VALUES ('1', '1', '1466', '43', '3', '4398', '4');
INSERT INTO `t_orderform` VALUES ('2', '3', '1699', '42', '2', '3398', '4');
INSERT INTO `t_orderform` VALUES ('3', '1', '1466', '42', '2', '2932', '4');
INSERT INTO `t_orderform` VALUES ('4', '1', '1466', '42', '2', '2932', '5');
INSERT INTO `t_orderform` VALUES ('5', '2', '1299', '43', '3', '3897', '4');

-- ----------------------------
-- Table structure for `t_receiver`
-- ----------------------------
DROP TABLE IF EXISTS `t_receiver`;
CREATE TABLE `t_receiver` (
  `uid` int(10) DEFAULT NULL,
  `rname` varchar(10) DEFAULT NULL,
  `raddress` varchar(100) DEFAULT NULL,
  `rphone` int(20) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_receiver
-- ----------------------------
INSERT INTO `t_receiver` VALUES ('4', '姜博文', '亚洲中国广东省深圳', '2', '1');
INSERT INTO `t_receiver` VALUES ('4', '111', '亚洲中国广东省深圳', '123', '2');
INSERT INTO `t_receiver` VALUES ('4', '111', '亚洲中国广东省深圳', '123', '3');

-- ----------------------------
-- Table structure for `t_shopcars`
-- ----------------------------
DROP TABLE IF EXISTS `t_shopcars`;
CREATE TABLE `t_shopcars` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cnumber` int(10) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_shopcars
-- ----------------------------

-- ----------------------------
-- Table structure for `t_stock`
-- ----------------------------
DROP TABLE IF EXISTS `t_stock`;
CREATE TABLE `t_stock` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `gid` int(10) DEFAULT NULL,
  `ingoods` int(10) DEFAULT NULL,
  `outgoods` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_stock
-- ----------------------------

-- ----------------------------
-- Table structure for `t_users`
-- ----------------------------
DROP TABLE IF EXISTS `t_users`;
CREATE TABLE `t_users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `upassword` varchar(16) DEFAULT NULL,
  `uemail` varchar(20) DEFAULT NULL,
  `uphone` varchar(20) DEFAULT NULL,
  `ucontent` varchar(100) DEFAULT NULL,
  `uimage` varchar(100) DEFAULT NULL,
  `uimage-up` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_users
-- ----------------------------
INSERT INTO `t_users` VALUES ('1', 'admin', 'admin', '', null, '', null, null);
INSERT INTO `t_users` VALUES ('2', 'unames', '123', '1', '1', '1', null, null);
INSERT INTO `t_users` VALUES ('3', 'idoknow', '1234', '2', '1', '2', null, null);
INSERT INTO `t_users` VALUES ('4', '111', '123', '53793156@qq.com', '15754605685', 'I am the king of the world', 'head_images/sign.png', null);
INSERT INTO `t_users` VALUES ('5', 'unknow', '123', '1', '2', '3', null, null);
INSERT INTO `t_users` VALUES ('6', 'addmin', '123', '4', '5', '6', null, null);
INSERT INTO `t_users` VALUES ('7', 'unbelieve', 'a123', '3', '2', '1', null, null);
INSERT INTO `t_users` VALUES ('8', 'heihei', '1232', '4', '5', '2', null, null);
INSERT INTO `t_users` VALUES ('9', 'gege', '1234', '1', '1', '2', null, null);
INSERT INTO `t_users` VALUES ('10', 'user', '1234', '1', '1', '1', null, null);
INSERT INTO `t_users` VALUES ('11', '222', '123', '1', '2', '3', null, null);
INSERT INTO `t_users` VALUES ('15', 'asdasdasd', '123123123', '123123123', '123123123', '123123123', null, null);
INSERT INTO `t_users` VALUES ('16', 'werwerwer', '13123123123', 'asdadasd', 'asdasdsad', '3123123123', null, null);
INSERT INTO `t_users` VALUES ('17', '111111', '111111', '111', '111', '111', null, null);
