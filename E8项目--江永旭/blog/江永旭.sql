/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jyx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-15 00:29:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for best
-- ----------------------------
DROP TABLE IF EXISTS `best`;
CREATE TABLE `best` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `words` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of best
-- ----------------------------
INSERT INTO `best` VALUES ('97', '江永旭', '习近平：全力推进新时代练兵备战工作', '0', '0', '12月13日，中共中央总书记、国家主席、中央军委主席习近平到第71集团军视察。这是习近平亲切接见集团军机关全体干部和所属部队团以上干部。新华社记者李刚 摄\r\n新华社江苏徐州12月14日电(记者李宣良、李大伟、李清华)中共中央总书记、国家主席、中央军委主席习近平13日到第71集团军视察。他强调，全军要认真学习贯彻党的十九大精神，深入学习贯彻新时代党的强军思想，贯彻新形势下军事战略方针，坚持政治建军、改革强军、科技兴军、依法治军，聚焦备战打仗，把握集团军建设管理和作战运用特点规律，扎实推进转型建设，全面提高打赢能力，履行好党和人民赋予的新时代使命任务。\r\n初冬的淮海大地，沃野千里，洋溢着勃勃生机。下午4时许，习近平来到第71集团军某旅，首先看望了王杰同志生前所在连官兵。王杰是上世纪60年代涌现出来的伟大共产主义战士，他为了保护身边12名民兵和人武干部的生命而光荣牺牲，成为全党全军全社会学习的模范。习近平参观了王杰生前所在连队荣誉室。一张张照片记录着王杰的成长历程，一篇篇日记折射出英雄的崇高精神，一面面锦旗承载着党和人民对英雄的赞誉褒奖。习近平看得很仔细，不时驻足询问。在介绍王杰正确对待荣誉和进步的展板前，习近平深有感触地说，王杰“在荣誉上不伸手，在待遇上不伸手，在物质上不伸手”，这“三不伸手”是一面镜子，共产党员都要好好照照这面镜子。习近平详细了解王杰一不怕苦、二不怕死的事迹，动情地讲，一不怕苦、二不怕死是血性胆魄的生动写照，要成为革命军人的座右铭。习近平强调，王杰精神过去是、现在是、将来永远是我们的宝贵精神财富，要学习践行王杰精神，让王杰精神绽放新的时代光芒。', '2017-12-15 00:21:57');
INSERT INTO `best` VALUES ('98', '江永旭', '军团视察', '0', '0', '\r\n12月13日，中共中央总书记、国家主席、中央军委主席习近平到第71集团军视察。这是习近平同“王杰班”战士合影。新华社记者李刚 摄\r\n离开连队荣誉室后，习近平来到“王杰班”。全班战士列队欢迎，习近平微笑着同他们一一握手。现任班长王大毛向习近平介绍了战士们争做王杰传人的情况。50多年来，连队每天点名第一个呼点王杰。看到王杰精神在连队得到很好传承，看到尊崇英雄、学习英雄氛围这么浓厚，习近平很欣慰。他招呼战士们围坐一圈，详细询问大家的学习、训练、生活情况，勉励大家再接再厉，带头做新时代王杰式的好战士。离开连队时，习近平同全连官兵合影留念，指战员们簇拥着习近平，充满了幸福和喜悦。全连官兵齐唱连歌“王杰的枪我们扛”，表达了广大官兵坚决听习主席的话、自觉做英雄传人的坚定决心。\r\n随后，习近平来到集团军机关，亲切接见机关全体干部和所属部队团以上干部。习近平在听取集团军工作情况汇报后发表重要讲话。他强调，要深入抓好党的十九大精神学习贯彻，紧贴时代发展、紧贴使命任务、紧贴官兵实际，提高针对性和实效性，切实在学懂弄通做实上下功夫，确保党的十九大精神在部队落地生根，转化为推进强军事业的强大力量。\r\n习近平指出，要坚持从思想上政治上建设和掌握部队，深入贯彻古田全军政治工作会议精神，按照新时代党的建设总要求加强各级党组织建设，教育引导官兵强化“四个意识”，坚决听从党中央和中央军委指挥。要严肃政治纪律和政治规矩，持之以恒推进作风建设和反腐败斗争，持续纯正部队政治生态。要弘扬光荣传统和优良作风，扎实开展“传承红色基因、担当强军重任”主题教育，让红色基因代代相传。要用新时代党的强军思想建连育人，做好抓基层打基础工作，培养“四有”革命军人，锻造“四铁”过硬部队。\r\n习近平强调，部队各级要聚精会神抓练兵备战，把战斗力标准立起来，努力提高打赢能力。要适应改革后新体制新编成，贯彻陆军转型建设要求，创新集团军建设管理和作战运用方式，提高机动作战、立体攻防能力。要坚持实战实训、联战联训，创新训练理念和方法手段，大抓实战化军事训练。要加强战斗精神培育和战斗作风训练，使部队成为威武之师。各级党委和领导干部要强化责任担当，带领部队把练兵备战各项任务完成好。\r\n许其亮等参加活动。', '2017-12-15 00:23:43');

-- ----------------------------
-- Table structure for better
-- ----------------------------
DROP TABLE IF EXISTS `better`;
CREATE TABLE `better` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `name` int(10) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `password` varchar(191) NOT NULL,
  `age` int(191) NOT NULL,
  `sex` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of better
-- ----------------------------
INSERT INTO `better` VALUES ('1', '11111', '江永旭', 'b0baee9d279d34fa1dfd71aadb908c3f', '0', '', '');
