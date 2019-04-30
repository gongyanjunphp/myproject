/*
 Navicat Premium Data Transfer

 Source Server         : 本地数据库
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : myproject

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 30/04/2019 21:02:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sb_company
-- ----------------------------
DROP TABLE IF EXISTS `sb_company`;
CREATE TABLE `sb_company`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `illustration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '插图',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  `ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'IP地址',
  `isshow` tinyint(2) UNSIGNED NULL DEFAULT 0 COMMENT '是否开启 1是开启 0是关闭 默认是0',
  `hits` int(9) UNSIGNED NULL DEFAULT 0 COMMENT '点击量',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '企业概况' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_company
-- ----------------------------
INSERT INTO `sb_company` VALUES (8, '&lt;p&gt;1000&lt;/p&gt;', './Uploads/2019-04-03/5ca47dd7b1ce5.png', '2019-04-03 17:33:16', '127.0.0.1', 1, 0);

-- ----------------------------
-- Table structure for sb_contactus
-- ----------------------------
DROP TABLE IF EXISTS `sb_contactus`;
CREATE TABLE `sb_contactus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '单位',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '地址',
  `postalcode` char(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '邮政编码',
  `telephone` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '手机号',
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '邮箱',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '联系我们' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_contactus
-- ----------------------------
INSERT INTO `sb_contactus` VALUES (24, '山西省大同市', '灵丘县西漕沟村64号', '034402', '17615834066', '960235873@qq.com', '2019-03-28 15:51:28');

-- ----------------------------
-- Table structure for sb_facility
-- ----------------------------
DROP TABLE IF EXISTS `sb_facility`;
CREATE TABLE `sb_facility`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '设备名字',
  `picpath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '图片',
  `status` int(11) NOT NULL COMMENT '状态 是否开启 1是开启 0是关闭 默认是0',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '设备表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_facility
-- ----------------------------
INSERT INTO `sb_facility` VALUES (1, '$data[\'picpath\'] = $path;', './Uploads/2019-03-30/5c9f60a274b79.jpg', 1, '2019-03-30 20:32:36');
INSERT INTO `sb_facility` VALUES (25, 'test1000', './Uploads/2019-03-28/5c9c737c3dd00.jpg', 1, '2019-03-28 15:11:21');
INSERT INTO `sb_facility` VALUES (26, '宫100', './Uploads/2019-04-03/5ca4788f09b64.png', 1, '2019-04-03 17:10:43');
INSERT INTO `sb_facility` VALUES (27, '22', './Uploads/2019-04-03/5ca47e45a83d3.png', 1, '2019-04-03 17:35:06');

-- ----------------------------
-- Table structure for sb_goods
-- ----------------------------
DROP TABLE IF EXISTS `sb_goods`;
CREATE TABLE `sb_goods`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `picpath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '图片',
  `status` int(11) NOT NULL COMMENT '状态 是否开启 1是开启 0是关闭 默认是0',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '商品展示表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_goods
-- ----------------------------
INSERT INTO `sb_goods` VALUES (24, 'test120', './Uploads/2019-04-02/5ca2cfc3e90f3.jpg', 1, '2019-04-02 10:58:11');
INSERT INTO `sb_goods` VALUES (25, 'test114100', './Uploads/2019-03-28/5c9c7743cfdf7.jpg', 0, '2019-03-28 15:26:59');
INSERT INTO `sb_goods` VALUES (26, '666', './Uploads/2019-04-03/5ca480930d45b.png', 1, '2019-04-03 17:44:53');

-- ----------------------------
-- Table structure for sb_honor
-- ----------------------------
DROP TABLE IF EXISTS `sb_honor`;
CREATE TABLE `sb_honor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '荣誉名字',
  `picpath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '图片',
  `status` int(11) NOT NULL COMMENT '状态 是否开启 1是开启 0是关闭 默认是0',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '荣誉表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_honor
-- ----------------------------
INSERT INTO `sb_honor` VALUES (76, '10', './Uploads/2019-04-03/5ca47e131bc14.png', 1, '2019-04-03 17:34:15');

-- ----------------------------
-- Table structure for sb_knowledge
-- ----------------------------
DROP TABLE IF EXISTS `sb_knowledge`;
CREATE TABLE `sb_knowledge`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  `isshow` tinyint(2) UNSIGNED NULL DEFAULT 0 COMMENT '是否开启 1是开启 0是关闭 默认是0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '塑料袋知识' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_knowledge
-- ----------------------------
INSERT INTO `sb_knowledge` VALUES (5, '<p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">看塑料袋的厚度。国家规定，市场上流通的塑料袋厚度不能低于0.025mm。市场上大多数定做塑料袋也会标注厚度，一般来说，超市所使用的塑料袋厚度标注，基本都超过国家标准。但事实上，有些商家为了销售厚度不达标的产品，也会在厚度标度上做手脚。因此，在购买塑料袋之前，好使用测厚仪，测量一下产品的实际厚度。<br/>　　<strong style=\"list-style: none; margin: 0px; padding: 0px;\">一、看塑料袋油墨是否有毒</strong>。塑料袋定做在印刷的过程中，选择何种油墨，也会对环保造成很大的影响。有毒的油墨，在接触食用油之后，容易出现掉色的情况。因此，在购买有印刷字样的塑料袋前，可以采用涂抹食用油的方式，来测试印刷油墨是否足够环保。另外，有色塑料袋不能作为食品塑料袋，这种塑料袋含有芳烃，有致癌作用。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;　　<strong style=\"list-style: none; margin: 0px; padding: 0px;\">二、看塑料袋的承重力</strong>。目前，国家规定定做塑料袋必须标注本身的承重力，但在销售市场上，还是有大量的塑料袋产品并没有标注承重力。简单的测试方式就是用一个塑料袋装一定重量的产品，拎着塑料袋走路，看能袋子能坚持多久。这个测试比较麻烦，那么采购者为什么要关注塑料袋的承重力呢？这是因为，一个承重力不好的塑料袋产品，常常会在使用过程中破裂，这就会增加顾客使用塑料袋的使用数量，造成浪费。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\"><br/>&nbsp;　　<strong style=\"list-style: none; margin: 0px; padding: 0px;\">三、要做焚烧实验</strong>。定做塑料袋的原材料，直接决定塑料袋的品质。食品级的原材料制作出来的袋子是环保的，废料、以及废料加颜料制成的塑料袋，制作成本低，具有一定的毒性。点燃一块塑料袋，待其自然熄灭后，观察在燃烧前后，是否产生黑烟、刺鼻气味，是否留下黑色物质，如果符合以上三条中的任何一条，那么实验所使用的塑料袋很可能是废料制成的。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\"><br/>&nbsp;　　通过以上四个环节的实验，就可以分辨出不合格产品，需要定做塑料袋时选择优良材质，为客户提供好的附加产品。</p>', '辨别塑料袋是否合格？', '2019-03-30 00:40:51', 1);
INSERT INTO `sb_knowledge` VALUES (6, '<p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">我们的生活因为有了科技的出现而有很大的改变，很多生活的必需品，它们的出现在很大程度上方便了我们的生活和工作。就像塑料袋一样，在古代，我们如果想要承装一些东西，都是使用食盒或者篮子，对于汤汤水水的东西，是真心的不方便。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">但是，自从有了塑料袋生产投入使用以来，就避免了这类问题的出现。我们不用在担心成装东西时会出现漏或者洒的情况了。那么，塑料袋定做过程中都应该考虑哪些问题那？下面，让我们来一起简单了解下。<br/><strong style=\"list-style: none; margin: 0px; padding: 0px;\">首先，是材料的选择</strong>，我们在选择材料上因该注意使用国家通过的合格化学原料，这样才能作为食品塑料袋的过程中，不会出现对人体造成伤害的问题存在。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\"><strong style=\"list-style: none; margin: 0px; padding: 0px;\">其次，就是制作流程的监管</strong>。我们一定要制作过程中每一环节的正规操作，以免后影响塑料袋的质量问题。尽量做到减少材料到浪费，大化到利用可以利用材料。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">还有，就是一个非常重要的问题，<strong style=\"list-style: none; margin: 0px; padding: 0px;\">就是做出的塑料袋是可以降解的产品</strong>，不要再对我们的造成白色污染了。因为我们现在很多工业方面的制造首先考虑的问题就是我们生活的环境问题。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(255, 255, 255);\">以上就是裕东为大家总结的有关塑料袋定做过程中需要考虑的一些问题。我们公司在生产塑料袋制品的同时都是紧尊国家的指导，生产合格产品，无论是对环境还是我们的人体，都不会造成任何的伤害。</p>', '塑料袋定做需要考虑哪些问题', '2019-03-30 00:41:43', 1);
INSERT INTO `sb_knowledge` VALUES (7, '<p><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">尺寸规格问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：任何尺寸规格的袋子都可以做吗？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：可以，我们了解你会有各种各样的需求，您的设计可能非常有创意，即使需要很特殊的尺寸，我们也可以帮您想办法做出来。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">印刷问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：我可以印上自己公司的LOGO或者设计图吗？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：当然可以，只要你能提供给我们.ai格式（国外客户基本用这个格式）或CorelDRAW格式的LOGO或设计稿，我们都可以帮你印到袋子上，这个时候袋子就成为了你独一无二的定制品。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">询价问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：你们的定做价格是低的吗？我该怎么联系你们呢？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：我们不会向您我们的报价是市场上低的，但是我们已经尽可能地通过自主生产，优化原材料采购流程，提高工作效率等措施尽量把价格降到低。我们提供了多种联系方式，你可以挑选方便的联系我们。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">索取样品</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：你们可以先寄样品给我吗？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：客户索要样品，我们是可以提供的，但运费需要到付，没有诚意合作环保袋生产事宜的，请不要索取样品。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">打样问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：我需要打样确认，请问这个费用怎么算？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：一般小订单客户和老客户都认可我们的产品，若首次合作客户需要打样，我们会象征性收取200元打样费，定货数量满10000个，返还打样费。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">包装问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：你们是用什么包装的？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：我们是按照客户要求进行包装，内贸一般采用50个/捆，1000-1500个/编织袋包装；外贸一般采用纸箱包装，100-200个/箱。</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><strong style=\"list-style: none; margin: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">运输问题</strong><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">：</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　问：你们用哪些方式运输成品？</span><br style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft YaHei&quot;; font-size: 12px; text-indent: 24px; background-color: rgb(255, 255, 255);\">　　答：一般情况下，我们走的是货运，根据路途的长短按件计费，运费到付。货运公司一般没有送货上门服务，我们只负责把货托运到你所在的城市，货运公司会通知你取货。外贸客户按港口及相关实际运输方式处理。</span></p>', '塑料袋厂定做常见问题解答', '2019-03-30 00:42:24', 1);

-- ----------------------------
-- Table structure for sb_live
-- ----------------------------
DROP TABLE IF EXISTS `sb_live`;
CREATE TABLE `sb_live`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '生活场景',
  `picpath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '图片',
  `status` int(11) NOT NULL COMMENT '状态 是否开启 1是开启 0是关闭 默认是0',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '生活场景表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_live
-- ----------------------------
INSERT INTO `sb_live` VALUES (24, 'test1000', './Uploads/2019-04-02/5ca2cd99cc474.png', 1, '2019-04-02 10:48:57');
INSERT INTO `sb_live` VALUES (25, 'test110', './Uploads/2019-03-28/5c9c7546e4b28.jpg', 1, '2019-03-28 15:18:30');
INSERT INTO `sb_live` VALUES (26, '999', './Uploads/2019-04-03/5ca47e6fc9ced.jpg', 1, '2019-04-03 17:35:47');

-- ----------------------------
-- Table structure for sb_manager
-- ----------------------------
DROP TABLE IF EXISTS `sb_manager`;
CREATE TABLE `sb_manager`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pwd` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) UNSIGNED NOT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sb_manager
-- ----------------------------
INSERT INTO `sb_manager` VALUES (1, 'admin', '1d0618f869b8f7897551201861e6947a4be85177', 1554273273);

-- ----------------------------
-- Table structure for sb_notice
-- ----------------------------
DROP TABLE IF EXISTS `sb_notice`;
CREATE TABLE `sb_notice`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  `isshow` tinyint(2) UNSIGNED NULL DEFAULT 0 COMMENT '是否开启 1是开启 0是关闭 默认是0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '企业概况' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_notice
-- ----------------------------
INSERT INTO `sb_notice` VALUES (4, '<p><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">1.提供塑料袋的具体尺寸,确定所要使用的材料。如果有原来的袋子,直接报规格、尺寸就是了,如果没有,看到别人的袋子 比较醒目,广告效果好也想做这类的,找个样品给我来做就是了。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　2.确定塑料袋的用料,有HDPELDPEOPP&nbsp; 的。一般超市里的购物袋是HDPE&nbsp; 的。它的特点的比较硬,结实。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　3.选择塑料袋的样式类型:现在市面上用的袋型一般是超市那种称为背心袋的购物袋,这种袋型因为袋子的两边提条形如背心而为得名.</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　有用来装食品的叫做食品袋,吃早饭的时候装包子、馒头的就是这种袋子,还有买菜的时候用来装菜的;</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　用来装水果的叫水果袋;超市用的叫购物袋.</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　用来装衣服的叫做水口袋,这种一般比较大;再就是垃圾袋,一般是黑色,家用,手机批发的也喜欢用来装手机。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　4.提供的名称,或者商号的LOGO</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　5.走淘宝担宝交换,或者收30%的定金,这 个是要收的了,每行都要收定金的,遇到过袋子做出来到了取货时间不来提货,电话打过去总是说好好好就来提货,几个月才来拿的;也有做出来不要货的,几个人合伙 开店做卤菜生意,这边袋子做好了,说店不开了,结果只有放着卖零售,这些都是定做的东西,上面印刷的是别人的产品宣传。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　6.塑 料袋制作准备,接下来就是制作的事了,买料、吹膜、印刷、分切、包装、交货,当然还有收款了。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　7.塑料袋制作周期:正常情况下设计、制版要3 天,制袋4 天,成品 出来估计要7 天左右。省内2 天,周边省是3 天。其它的一般 是7 天左右。</span><br style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" white-space:=\"\" background-color:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" text-indent:=\"\" background-color:=\"\">　　8.塑料袋成品数量问题:因为吹膜、印刷要试机器,所以出来的袋子可能比订购数量多点也可能少点,一般是按照实际数量付款。</span></p>', '宫彦军', '2019-03-30 02:06:12', 1);

-- ----------------------------
-- Table structure for sb_price
-- ----------------------------
DROP TABLE IF EXISTS `sb_price`;
CREATE TABLE `sb_price`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `createtime` datetime(0) NOT NULL COMMENT '时间',
  `isshow` tinyint(2) UNSIGNED NULL DEFAULT 0 COMMENT '是否开启 1是开启 0是关闭 默认是0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '塑料袋价格\r\n' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sb_price
-- ----------------------------
INSERT INTO `sb_price` VALUES (5, '<p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: \" microsoft=\"\" white-space:=\"\" background-color:=\"\">【塑料袋厂的计价方式】<br/>长*宽*厚*2.62*每磅单价再除1000=每PCS售价．所有工厂都是这样计算出来的．<br/>长乘宽乘厚度就是重量,一般塑料袋都这样算,一些特殊材料的袋子还会乘系数,这个系数根据袋子的材料来定,是不固定的.详细的简介：平口袋如何报价的？计算方式是什么？<br/>【塑料袋尺寸大小怎么选择？】<br/>一般都是PE料，用火焰烧，不冒烟、燃烧过程中滴液，有点燃蜡味，燃烧后基本无残留。放入水中不沉。旧料透光观察，可发现不均匀颗粒物或颜色不均匀，旧料基本都着色。但现在有些可降解塑料除外。<br/>塑料袋是没有固定尺寸的，可以任意剪裁。各种用途尺寸都不一样的，比如现在装夏装，高35*宽30*侧8cm，就合适了，够用又很经济。如果是做宣传的话，高40*宽30*侧10cm。塑料袋厂尺寸大小主要看两个要素：一，够用；二，经济。尺寸大小适合需要包装的产品就行，大了小了，都不适合产品包装。<br/>1、比较常用的是30cm(宽)X40cm(高)X10cm(底宽和侧宽),手提带长一般为45cm,宽为2.5cm, 还有A3纸大小的超声波平口袋，尺寸为：32cm（宽）*43cm（高）*10cm（底宽和侧宽），手提带长一般为50cm,宽为2.5cm.这是各企业单位装资料常用的一种。<br/>2、超市的超声波平口袋比较大。尺寸为：48（宽）*35（高）*10（底宽和侧宽），手提带长为50cm,宽为2.5cm<br/>3、无底边无侧边的超声波平口袋，尺寸为30X40cm较为常见；<br/>4、还有宽比高长的超声波平口袋，也就是横向的塑料袋厂，规格一般为40cm(宽)X30cm(高)X10cm(侧边)，手提带为50cm; 总之超声波平口袋随着款式的多少化、时尚化，尺寸也没有完全限定于哪个规格，一切以所装物品以款式的需要而定。<br/>【塑料袋定做】<br/>搜罗时下新全面的塑料袋厂定做相关资讯，如新图片、参考价格，厂家品牌、产地等基本信息，同时也精选网友关于塑料袋厂定做好坏,怎么样等用户关心的问题评论，为您网购塑料袋厂定做有价值的产品：10丝50*60加厚塑料平口袋 塑料袋厂 pe塑料包装袋 高压袋批发定做。我们在进行交易过程中遵守诚实信用的原则，不在交易过程中发生虚假陈述、欺诈的行为。</p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: \" microsoft=\"\" white-space:=\"\" background-color:=\"\">后LQW补充一点：我们可以定做大规格方袋，120X100X130CM的规格，大风琴平口袋，80+40都可以生产，PE大规格平口袋，宽150X300CM&nbsp;</p>', '择的？', '2019-03-30 00:46:20', 1);
INSERT INTO `sb_price` VALUES (7, '<p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px; font-family: \" microsoft=\"\" white-space:=\"\" background-color:=\"\"><span style=\"text-indent: 2em;\">（塑料袋计算公式？）</span><br/></p><p style=\"list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; font-size: 12px; color: rgb(102, 102, 102); text-indent: 2em; line-height: 24px;\" microsoft=\"\" white-space:=\"\" background-color:=\"\">　　可能很多人都不太清楚塑料袋的价格是如何来算的，小编就这问题来给大家讲下塑料袋价格的计算公式。<br/>　　A.胶袋计价公式 ||.Hv[ ]V*<br/>　　长X宽X厚X2X密度X单价(元/公斤)/1000=1个光袋的价格<br/>　　单价=材料费+加工费 ;E[Q/ tr:w<br/>　　单位:cm<br/>　　B.计算公式 每平方米所得小张数＝10000÷（成品长cm×宽cm）<br/>　　每小张单价＝每平方米单价÷每平方米所得小张数<br/>　　起步价 起步价250元，不足250元按250元收取<br/>　　起步价多可印数＝250.00-100元（模刀费）÷小张单价</p>', 'rrr', '2019-03-30 00:49:04', 1);
INSERT INTO `sb_price` VALUES (8, '<p>6666666666666666</p>', '辨别塑料袋是否合格？', '2019-03-30 00:48:00', 1);

SET FOREIGN_KEY_CHECKS = 1;
