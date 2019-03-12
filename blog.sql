/*
Navicat MySQL Data Transfer

Source Server         : php1
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2019-03-09 09:05:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `pwd` char(32) NOT NULL,
  `truepwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'sjh', '932b0c31f8000e756b560f454e3bfa0c', '19930422');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(10) NOT NULL DEFAULT 'admin',
  `ptime` date DEFAULT NULL,
  `picture` varchar(50) NOT NULL DEFAULT '',
  `seotitle` varchar(30) NOT NULL DEFAULT '',
  `keywords` varchar(80) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `introduce` varchar(300) NOT NULL,
  `hits` int(11) NOT NULL,
  `content` text,
  `step` int(11) DEFAULT '0',
  `fabulous` int(11) DEFAULT '0',
  `ifshow` enum('0','1') NOT NULL DEFAULT '1',
  `create_at` int(25) DEFAULT NULL,
  `update_at` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('60', '5', '鱼非我，焉知我之行！', '孤独月妖', '2018-12-13', './Public/Uploads/201903/5c80d52b82bc518.jpg', '生活随笔,人生感悟', '借鉴,懂', '朋友说：“我的心情一般！”那么这样的心情也是心情，不好也不坏，有点中庸的味道，也好呀！', '子非鱼，焉知鱼之乐！朋友告诉我说，这是老庄的话。我不求甚解，但我想说，鱼非我，焉知我之行。是呀，我们不在一个环境里，对鱼说，它在水里；对我说，我在陆上，鱼在游，我在行；谁更得其乐呢？', '89', '<p><cite>在拿起笔的瞬间，我是犹豫不决的，只是在手中把玩，或旋转它，或翻转它；与其说折磨它，还不如说是在折磨自己。就在境由心生的瞬间，我是在一种游离状态，一般是思无定势，想起很多，但能为定式所去的，还是不敢轻易落下笔去书写出来，一旦点横出现的在眼前时，那将是认真的，认真地去排除杂念，从时间上到环境上，这都需要有序地来把思绪穿插到合理的位置上。时间、环境、人，不仅仅是我一个人的；也是其他人的，我和其他人是共享的，与此说来，那么我们的笔下是相互借鉴的，也是各有所悟的&hellip;&hellip;</cite></p>', '0', '0', '1', null, null);
INSERT INTO `article` VALUES ('62', '6', '发掘更好的自己，才能遇见最好的别人', '碎叶写给他的英雄', '2018-11-23', './Public/Uploads/201903/5c80f8e263ace50.jpg', '你若盛开，花蝶自来，你若精彩，天自安排', '勇气,做自己,尝试', '人生不可能没有遗憾，没有遗憾的人生就是一种遗憾，我们所要做的就是正确心态和方式处理这些遗憾，收拾好自己的心情，轻装上阵，走更远的路看更大的海。', '生活不如意十之八九，有阴就有晴，有得到就有失去，有快乐也有不快乐，我们在这种种复杂中，如果深陷其中，就会迷失自我，只有提高自己的高度，让自己在生活的淬炼中，修炼自己的内心，不与乱事乱人纠结，尽量和正能量积极的人交往，让自己时刻保持一种旺盛的状态，时刻让自己处于一种最佳的状态中，那么，生活的美尽向你绽放。', '77', '<p>　记忆深处里，小时候体育课上，<a href=\"http://www.duwenzhang.com/huati/laoshi/index1.html\">老师</a>组织我们男生搞了一个跳高比赛，标竿上升到90厘米时，总有几个男生跳不过，这样就受到别的同学一片嘘声，再这嘘声中，也有无地自容的我，因为我正是这跳不过的男生当中的一个。</p>\r\n\r\n<p>　　后来，老师为了让所有男生体育成绩合格，就再讲了一遍跳高的技巧，我一字一句听到心里去了，临到再一次跳高时，我鼓起<a href=\"http://www.duwenzhang.com/huati/yongqi/index1.html\">勇气</a>，按照老师说的技巧再一次尝试，这一次竟然跳过了，此时，班上所有同学齐刷刷的鼓掌。</p>\r\n\r\n<p>　　这件事一直影响了我许多年，当自己落后时，就要受到别人嘲笑，只有当自己进步了，才能受到别人的尊重和鼓励。做更好的自己，才能遇见最好的别人。</p>\r\n\r\n<p>　　<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/\">生活</a>不如意十之八九，有阴就有晴，有得到就有<a href=\"http://www.duwenzhang.com/huati/shiqu/index1.html\">失去</a>，有<a href=\"http://www.duwenzhang.com/huati/kuaile/index1.html\">快乐</a>也有不快乐，我们在这种种复杂中，如果深陷其中，就会<a href=\"http://www.duwenzhang.com/huati/mishi/index1.html\">迷失</a>自我，只有提高自己的高度，让自己在生活的淬炼中，修炼自己的<a href=\"http://www.duwenzhang.com/huati/neixin/index1.html\">内心</a>，不与乱事乱人纠结，尽量和正能量积极的人交往，让自己时刻保持一种旺盛的状态，时刻让自己处于一种最佳的状态中，那么，生活的美尽向你绽放。</p>\r\n\r\n<p>　　有时，我们<a href=\"http://www.duwenzhang.com/huati/nanguo/index1.html\">难过</a>了，可以允许自己难过一会儿，但是不允许自己自此就沉沦其中，生活有许多切片，这片窗户看到的是小狗死掉，另一扇窗户也许就是鲜花盛开。因此，适时的切换频道和状态，是对自己的把控力的锻炼，这一点很重要。</p>\r\n\r\n<p>　　<a href=\"http://www.duwenzhang.com/wenzhang/renshengzheli/\">人生</a>不可能没有<a href=\"http://www.duwenzhang.com/huati/yihan/index1.html\">遗憾</a>，没有遗憾的人生就是一种遗憾，我们所要做的就是正确<a href=\"http://www.duwenzhang.com/huati/xintai/index1.html\">心态</a>和方式处理这些遗憾，收拾好自己的<a href=\"http://www.duwenzhang.com/wenzhang/xinqingriji/\">心情</a>，轻装上阵，走更远的路看更大的海。既要学会放下心中的执念，又要对得起自己的不干心，因为我们放下的是不可能得到的东西，我们的不干心，是对自己<a href=\"http://www.duwenzhang.com/huati/shengming/index1.html\">生命</a>的负责。有时，我们边走边泪，心中曾经认为的不可能，都成为了可能，而那些遥不可及的<a href=\"http://www.duwenzhang.com/huati/mubiao/index1.html\">目标</a>，都成为了身后的风景。</p>\r\n\r\n<p>　　你若盛开，花蝶自来，你若精彩，天自安排，有时，我们缺少的只是一种自我精彩的勇气，明明可以让自己变得更好，可是<a href=\"http://www.duwenzhang.com/huati/fangqi/index1.html\">放弃</a>了机会，明明可以证明自己，却缺少了勇气。很多时候，不是我们不行，而是我们不敢去想，不敢去试，害怕<a href=\"http://www.duwenzhang.com/huati/shibai/index1.html\">失败</a>比失败本身这件事更值得可怕。</p>\r\n\r\n<p>　　其实我们每个人都可以发掘更好的自己，做最好的自己，只是我们失去了自我探索的能力。那些朝九晚五的安稳让我们迷离，那些灯红酒绿的诱惑让我们沉沦，那些纷繁复杂的人情让我们疲惫，那些狐朋狗友的&ldquo;情谊&rdquo;让我们纷乱，我们只是一个被<a href=\"http://www.duwenzhang.com/huati/yuwang/index1.html\">欲望</a>驱使的奴隶，而不是主宰欲望的主人，当一个人能够正确处理自己的欲望和生活琐事，那么，这才是一个最好的自己。</p>\r\n\r\n<p>　　而最好的自己往往极其简单的，生活俭朴，不乱于心，不困于情，时刻保持一种轻盈的状态，对突如其来的事，往往有很好的把控力，决不会被自己的欲望所吞没，神清目明，心中有爱，疏而不离，<a href=\"http://www.duwenzhang.com/huati/danbo/index1.html\">淡泊</a>如水&hellip;&hellip;</p>\r\n', '0', '0', '1', null, null);
INSERT INTO `article` VALUES ('63', '8', '自暴自弃庸庸碌碌，或许也能活得下来，但这绝不是生活', '小伙当自强', '2019-02-28', './Public/Uploads/201903/5c80f9950655f78.jpg', '有了心中的目标，就要去追逐它', '舵手,南柯一梦', '优胜劣态适者生存是一个亘古不变的自然规律。不管是怎样的活法。人都应有一个积极向上的心态，去投身生活，去追逐目标。不管你是羚羊还是狮子，当太阳升起之时，就要毫不迟疑地向前奔去。生活就是这样。', '有的人就像那个石阶，有的人就像那个石佛。前者以为自己经历了无情的社会生活压力给予他们的困难，而觉得自己应该理所应当的得到他所应当得到的，因为他们“经历过了”，而事实却是他们在等待着这个回报，他们与目标的距离始终还是很遥远，丝毫没有一丝的拉近，他们便对社会、对上苍充满了抱怨，充满了厌恶，他们自认为觉得自己已经吃过苦，为什么还不能成功，为什么还不能', '58', '<p><a href=\"http://www.duwenzhang.com/huati/zuoren/index1.html\">做人</a>，无需去羡慕别人，也无需去花<a href=\"http://www.duwenzhang.com/huati/shijian/index1.html\">时间</a>去羡慕别人是如何<a href=\"http://www.duwenzhang.com/huati/chenggong/index1.html\">成功</a>的，想的只要是自己如何能战胜自己，如何变得比昨天的自己强大就行。自己的磨练和坚持，加上自己的智慧和勤劳，会成功的。终将变成石佛那样受到大家的尊敬。</p>\r\n\r\n<p>　　1</p>\r\n\r\n<p><img alt=\"自暴自弃庸庸碌碌，或许也能活得下来，但这绝不是生活\" src=\"http://www.duwenzhang.com/upimg/180923/1_153012.jpg\" style=\"float:right; height:230px; width:340px\" />　　<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/\">生活</a>星期天早上和<a href=\"http://www.duwenzhang.com/huati/pengyou/index1.html\">朋友</a>一起聊天，朋友说了一个他们听过的<a href=\"http://www.duwenzhang.com/\">故事</a>：&ldquo;一尊佛像前有一条铺着石板的路，人们每天都踏着这一阶一阶的石板去膜拜佛像。石阶看着人们踏着自己去膜拜佛像，心里很不舒服。石阶心里想，自己和佛本来就来自同一块石头，为什么自己要成为踏脚石，让人们踩着自去去膜拜它呢！它对佛抱怨说这样太不公平！佛像说：这没有什么不公平，你们成为台阶只需挨了四刀，而我是挨了千刀万剐才成了人们膜拜的佛像。&rdquo;</p>\r\n\r\n<p>　　他说这个故事给留下非常深刻的印象&mdash;&mdash;人确实需要磨练才能成才，不一样的付出，当然收获不一样的结果。</p>\r\n\r\n<p>　　&ldquo;自古雄才多磨难，从来纨绔少伟男，&rdquo;&ldquo;宝剑锋从磨砺出，梅花香自苦寒来，&ldquo;一个人要想成为人上之人，必须吃得苦中之苦。只要有抱负，就去<a href=\"http://www.duwenzhang.com/huati/nuli/index1.html\">努力</a>。不努力不付出，石阶永远不可能变成佛像的！</p>\r\n\r\n<p>　　2</p>\r\n\r\n<p>　　有一个小山村，很久很久都没有下雨了，老百姓吃完了粮食，吃草根，吃完了草根，吃树皮，到最后没有任何东西能填饱肚子，无数身边的人<a href=\"http://www.duwenzhang.com/huati/likai/index1.html\">离开</a>了，老人死去了，弱小的<a href=\"http://www.duwenzhang.com/huati/haizi/index1.html\">孩子</a>死去了，村里的年青人不知如何是好。</p>\r\n\r\n<p>　　于是他们就去找智慧老人，智慧老人说，这是对神灵的不敬，需要派人去采集光滑，有灵性，中间有缝，左右对称的卵石，取其中的一块，雕刻成佛，让石佛保佑众生，村里人都去找卵石了，采集卵石非常难，翻山、过河、找不到合适的石头，其中有一个年轻人在采集的过程中又饥又饿，年青人想<a href=\"http://www.duwenzhang.com/huati/fangqi/index1.html\">放弃</a>，躺在石头上想休息，忽然间发现，他躺得这块石头非常的光滑，左右对称，与其他的石头不一样，难道这就是孪生石？</p>\r\n\r\n<p>　　年青人赶紧找来石匠，石匠与石头打了一辈子的交道，听的懂石头的语言。左看右看，石匠认定这就是智慧老人所说的孪生石，石匠和年轻人找来村子里的其他人费了很大的劲把石头搬到村里的庙里。</p>\r\n\r\n<p>　　石匠用手摸摸孪生石，<a href=\"http://www.duwenzhang.com/huati/ganjue/index1.html\">感觉</a>右边的有灵性，有质感！问石头，你愿意做石佛吗？石头回答到&ldquo;愿意&rdquo;石匠&ldquo;砰砰砸了几下！&rdquo;右边石头说：太痛了。石匠说：肯定会痛。右边石头：为了成为石佛，我能忍受。石匠说：每凿一下，你就流出鲜血和汗珠，一天、二天、三天、十天&hellip;&hellip;二十天，就在雕琢面部的最后期限，那块会凿的更痛。</p>\r\n\r\n<p>　　石匠：你能忍吗？右边石头：我能忍！砰的一下，凿下去，石头一下哭了。</p>\r\n\r\n<p>　　右边石头：这痛已经超出了我的极限。我实在忍受不了，缓一缓好吗？</p>\r\n\r\n<p>　　明天在来好吗？第二天石匠拿起榔头。</p>\r\n\r\n<p>　　右边石头说：慢着，我昨天想了一夜，风吹雨打，我落的自在，成为佛也不过就是千人朝拜，万人敬仰，我实在受不了&hellip;&hellip;</p>\r\n\r\n<p>　　石匠很惋惜，对另外一块石头说，你愿意做是佛吗？左边石头说：只要能救老百姓，给老百姓求来雨，敌我愿意做石佛。石匠为了将这块石头雕琢成佛，连夜打造，一天、两天&hellip;&hellip;左边的石头忍受了刀削斧凿的<a href=\"http://www.duwenzhang.com/huati/tongku/index1.html\">痛苦</a>，石头脸上伤痕累累。二十天过去了，石匠终于把左边的石头雕刻成 了一尊佛像。</p>\r\n\r\n<p>　　两天之后，天上果真降下大雨，村民都纷纷来朝拜石佛，而把右边的石头当成了台阶，踩踏跪拜，夜深的时候，两块石头开始了他们的对话。</p>\r\n\r\n<p>　　右边石头说：我们俩同样都是一个山上的石头，论时间、外形、机会我都胜过你。而现在你却高高在上，接受人们的膜拜，这些人却踩着我的身体去朝拜你，把口水吐在我身上，太不公平了。</p>\r\n\r\n<p>　　石佛（左边的石头）笑了笑说：<a href=\"http://www.duwenzhang.com/huati/xiongdi/index1.html\">兄弟</a>：其实一切都是公平的，从小我就知道，论资质我不如你好，当我们同样被采集下山的时候，石匠说要把你雕成佛像，你怕疼不肯让身上留下凿痕，可是我就想为老百姓带来<a href=\"http://www.duwenzhang.com/huati/xingfu/index1.html\">幸福</a>和<a href=\"http://www.duwenzhang.com/huati/meihao/index1.html\">美好</a>，要我的<a href=\"http://www.duwenzhang.com/huati/shengming/index1.html\">生命</a>我都愿意，所以我接受了千锤百炼，才变成佛像的。</p>\r\n\r\n<p>　　3</p>\r\n\r\n<p>　　非洲，每天早晨羚羊睁开眼睛，所想到的第一件事就是，我必须比跑得最快的狮子跑得更快，否则我会被吃掉；而就在同一时刻，狮子从睡梦中醒来，首先闪现在他脑海中的念头是，我必须能赶得上跑得最快的羚羊，要不然，我会饿死。于是，几乎同时，羚羊和狮子一跃而起，迎着朝阳跑去。</p>\r\n\r\n<p>　　这是生物圈里一个很普遍的现象，羚羊和狮子疲于奔波都是为了同样一个<a href=\"http://www.duwenzhang.com/huati/mubiao/index1.html\">目标</a>――生存。这也是动物的本能，而<a href=\"http://www.duwenzhang.com/wenzhang/renshengzheli/\">人生</a>在世总要为着这样或那样的目标去劳作去追逐――有意识的活动和<a href=\"http://www.duwenzhang.com/huati/danchun/index1.html\">单纯</a>的本能是人与动物的重要区别。动物尚且能为生存而奔跑，何况人乎？人生活在世上干什么，就是要实现自己的生存<a href=\"http://www.duwenzhang.com/huati/jiazhi/index1.html\">价值</a>，就是要让<a href=\"http://www.duwenzhang.com/huati/shehui/index1.html\">社会</a>承认自己价值的存在，这才是有意义的生活。自暴自弃蝇营狗苟之徒，或许也能活得下来，但这绝不是生活！</p>\r\n\r\n<p>　　著名物理学家库珀说：&quot;人生就像打高尔夫球时击出去的球，要有一个明确的目标。&quot;是的，人的生活不能没有个明确的目标。没有目标，就没有前进的方向和动力，就象大海中的船舶，没有舵手，它就随时可能触礁或搁浅；没有目标，人就活得消极被动，庸庸碌碌无所作为。譬如，庙里撞钟的和尚，他从来不会去考虑自己哪天会失业，或者哪天去跳槽，只是苦度年华，静待归西的涅磐。如果羚羊和狮子都蛰伏不起，它们也难免要被吃掉或饿死；但它们总是一跃而起向前奔去，这是因为它们有生存的目标，这既是方向，也是动力。</p>\r\n\r\n<p>　　有了心中的目标，就要去追逐它，去为它潜心地付出，哪怕是为伊憔悴衣带渐宽？是真正的生活，就要有百折不挠的激情，就要去做自己力所能及的事，就要有中流击水的魄力和不到长城非好汉的气概！库珀补充说：&quot;当你把手中的球投向目标之后，你就要奋勇地向它奔去。&quot;这就是积极的活法。如果整天耽于<a href=\"http://www.duwenzhang.com/huati/huanxiang/index1.html\">幻想</a>，坐井观天不思进取，那么，最亮堂的目标最终也不过是南柯一梦罢了。</p>\r\n\r\n<p>　　然而，<a href=\"http://www.duwenzhang.com/huati/fendou/index1.html\">奋斗</a>后总有<a href=\"http://www.duwenzhang.com/huati/shibai/index1.html\">失败</a>和成功两种结果，失败是让人痛苦的，而痛苦的人们并不因失败就痛不欲生裹足不前了，而是擦擦<a href=\"http://www.duwenzhang.com/huati/yanlei/index1.html\">眼泪</a>又上路了。正如羚羊被吃掉和狮子饿死荒野而并没有阻止它们向前奔跑的脚步一样。阿富汗的著名作家乌尔法特曾经说：&quot;无论什么人，只要他没有尝过饥与渴是什么味道，那他就永远无法<a href=\"http://www.duwenzhang.com/huati/xiangshou/index1.html\">享受</a>到饭与水的甜美。&quot;没有目标的人，或者不曾为目标而奋斗过的人，永远品尝不到潜心追逐目标的幸福与<a href=\"http://www.duwenzhang.com/huati/kuaile/index1.html\">快乐</a>。就算是失败了，也可对自己说一声，我无怨无悔！</p>\r\n\r\n<p>　　优胜劣态适者生存是一个亘古不变的自然规律。不管是怎样的活法。人都应有一个积极向上的<a href=\"http://www.duwenzhang.com/huati/xintai/index1.html\">心态</a>，去投身生活，去追逐目标。不管你是羚羊还是狮子，当太阳升起之时，就要毫不迟疑地向前奔去。生活就是这样。</p>\r\n\r\n<p>　　这个是个人生哲学，这个故事也能说明很多做人道理。如今，不比20世纪，现在的生活条件竞争激烈，每个人都不想被淘汰，每个人都想让自己的生活过的好些，每个人都有着自己的<a href=\"http://www.duwenzhang.com/huati/mengxiang/index1.html\">梦想</a>和<a href=\"http://www.duwenzhang.com/huati/lixiang/index1.html\">理想</a>。但是成功与失败最大的区别是，成功的人不在于花多少时间去说他们的梦想和理想，不在于花多少时间去抱怨他们的苦难与困境，不在乎花时间去羡慕和仰慕别人的成功而让自己感到<a href=\"http://www.duwenzhang.com/huati/zibei/index1.html\">自卑</a>；成功的人只会去做他们该做的事情，只会面对他们的困难，不会有抱怨，更不会有羡慕，因为他们心中有目标，理想，动力以及那颗沉淀的心。</p>\r\n\r\n<p>　　有的人就像那个石阶，有的人就像那个石佛。前者以为自己经历了无情的社会生活压力给予他们的困难，而觉得自己应该理所应当的得到他所应当得到的，因为他们&ldquo;经历过了&rdquo;，而事实却是他们在<a href=\"http://www.duwenzhang.com/huati/dengdai/index1.html\">等待</a>着这个回报，他们与目标的距离始终还是很遥远，丝毫没有一丝的拉近，他们便对社会、对上苍充满了抱怨，充满了厌恶，他们自认为觉得自己已经吃过苦，为什么还不能成功，为什么还不能得到他们想得到的呢？他们便在厌恶的同时去羡慕那些像石佛一样的人。而后者像石佛一样的人，他们经历了多少，谁能知道，他们花了多少个日日夜夜、春夏秋冬才能成为如此气势宏伟、受人尊敬的石佛，大家看到的只是他的结果而没有在乎他的过去和成功的过程。与石佛的<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/chengzhang/\">成长</a>经历相比，石阶算的上什么呢？</p>\r\n', '0', '0', '1', null, null);
INSERT INTO `article` VALUES ('64', '10', '别再说...', '程媛小妖', '2019-03-01', './Public/Uploads/201903/5c80fa560e72938.jpg', '待春暖花开探寻油菜花海，看漫天桃花雨赏一席梨花白', '不知道,已忘记请,没见过', '我讨厌到处捧着手机似笑非笑的表情，什么时候开始人们的感情要靠小小的手机维系；看不惯那些花费着父母的血汗，耀武扬威说大话的青年；讨厌公交上拥挤的人群夹杂着韭菜盒子的味道，我不知道现在的文明都去哪了；也许有人会说，不过一个无名小卒何来资本评判别人，嘴里还要骂着‘傻逼，关你什么事’……', '少一些抱怨吧，珍惜你所拥有的，不要在以后的某个日子，你怀揣歉意对自己说，假如重新来过，我一定不会怎样怎样。可是我想说，假如真的给你一次重新来过的机会，又有多少人能够百分百活成你说的样子……你没见过，物似人非的样子？', '31', '<p>别再说，地铁太挤工作不易，你可曾见过火车上肩扛手提，许多我们叫<a href=\"http://www.duwenzhang.com/huati/fuqin/index1.html\">爸爸</a>的人拖着比自己都高的行李奔赴生计！</p>\r\n\r\n<p>　　别再说，压力太大<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/\">生活</a>艰辛，你可曾知道有人已经年逾古稀依然起早贪黑，只为解决一家温饱！</p>\r\n\r\n<p>　　别再说，灯红酒绿索然无味，你可曾想过穿梭城市的民工也许连一瓶矿泉水都狠不下心来买！</p>\r\n\r\n<p>　　别再说，写不完的作业背不完的公式让你身心疲惫，你可曾听过遥远的山村有赤脚的<a href=\"http://www.duwenzhang.com/huati/haizi/index1.html\">孩子</a>趴在窗前偷听<a href=\"http://www.duwenzhang.com/huati/laoshi/index1.html\">老师</a>讲课！</p>\r\n\r\n<p>　　别再说，世界那么大我想去看看，你可曾知道多少人即使行将就木，依然没有出过方圆十里的村落！</p>\r\n\r\n<p>　　别再说，昨夜王者精神不振，你可知道有个<a href=\"http://www.duwenzhang.com/huati/muqin/index1.html\">母亲</a>孤灯夜下穿针引线为千里之外的孩子添补衣裳，只因一句天冷了！</p>\r\n\r\n<p>　　别再说，空调房的你都吼不住炎炎夏日，那是你没见过烫人的黄土混合<a href=\"http://www.duwenzhang.com/huati/yanlei/index1.html\">眼泪</a>的汗流浃背，有个<a href=\"http://www.duwenzhang.com/huati/fuqin/index1.html\">父亲</a>顶着烈日给他的孩子挣学费！</p>\r\n\r\n<p>　　别再说，衣服太少柜子空空，你可曾记得母亲身上穿的那件外套，不正是你几年前淘汰的垃圾！</p>\r\n\r\n<p>　　别再说，老爸老妈明年我一定回家，什么都可以<a href=\"http://www.duwenzhang.com/huati/dengdai/index1.html\">等待</a>，尽孝麻烦请趁快&hellip;&hellip;</p>\r\n\r\n<p>　　别再说，物欲横流真爱难觅，家中那张泛黄的老照片明明见证了<a href=\"http://www.duwenzhang.com/huati/yeye/index1.html\">爷爷</a><a href=\"http://www.duwenzhang.com/huati/nainai/index1.html\">奶奶</a>相濡以沫坐着摇椅变老的<a href=\"http://www.duwenzhang.com/wenzhang/aiqingwenzhang/\">爱情</a>。</p>\r\n\r\n<p>　　好了，别再说&hellip;&hellip;</p>\r\n\r\n<p>　　 如果你没见过请别再说，如果你不知道请别再说，如果你已忘记请别再说！</p>\r\n\r\n<p>　　我讨厌到处捧着手机似笑非笑的表情，什么时候开始人们的<a href=\"http://www.duwenzhang.com/huati/ganqing/index1.html\">感情</a>要靠小小的手机维系；看不惯那些花费着<a href=\"http://www.duwenzhang.com/huati/fumu/index1.html\">父母</a>的血汗，耀武扬威说大话的青年；讨厌公交上拥挤的人群夹杂着韭菜盒子的味道，我不知道现在的文明都去哪了；也许有人会说，不过一个无名小卒何来资本评判别人，嘴里还要骂着&lsquo;傻逼，关你什么事&rsquo;&hellip;&hellip;</p>\r\n\r\n<p>　　我只是不明白，身处优越的我们果真有如此多的不尽人意？</p>\r\n\r\n<p>　　少一些抱怨吧，<a href=\"http://www.duwenzhang.com/huati/zhenxi/index1.html\">珍惜</a>你所<a href=\"http://www.duwenzhang.com/huati/yongyou/index1.html\">拥有</a>的，不要在以后的某个日子，你怀揣歉意对自己说，假如重新来过，我一定不会怎样怎样。可是我想说，假如真的给你一次重新来过的机会，又有多少人能够百分百活成你说的样子&hellip;&hellip;你没见过，物似人非的样子？</p>\r\n\r\n<p>　　多一些关爱吧，关爱让人心疼的陌生人，哪怕只是收起你鄙夷的<a href=\"http://www.duwenzhang.com/huati/yanshen/index1.html\">眼神</a>；关爱你的父母亲人<a href=\"http://www.duwenzhang.com/huati/pengyou/index1.html\">朋友</a>，把打游戏玩手机的<a href=\"http://www.duwenzhang.com/huati/shijian/index1.html\">时间</a>分一点点给他们，哪怕只说一句还好吧。你不知道，他们为你付出了什么。</p>\r\n\r\n<p>　　多一些纯真吧，你会发现许多人都是<a href=\"http://www.duwenzhang.com/huati/shanliang/index1.html\">善良</a>的，我们的爱就在身边。</p>\r\n\r\n<p>　　待春暖花开探寻油菜花海，看漫天桃花雨赏一席梨花白，能说一句我不<a href=\"http://www.duwenzhang.com/huati/houhui/index1.html\">后悔</a>。</p>\r\n', '0', '0', '1', null, null);
INSERT INTO `article` VALUES ('65', '11', '千里马不进取，也是废马', '益谦亏盈', '2019-03-02', './Public/Uploads/201903/5c80fad95373d29.jpg', '感悟人生！珍惜现在', '坚持,努力,不气垒', '今天你做的每一件看似平凡的努力都是在为你的未来积累能量，今天 你所经历的每一次不开心、拒绝，都是在为未来打基础！', '不要等到老了跑不动了再来后悔！\r\n\r\n　　学历不代表有能力，文凭不代表有文化，过去的辉煌都已成为历史和回忆。\r\n\r\n　　所以，昨天怎么样不重要，关键是今天做了什么，明天会怎么样！', '88', '<p>有一匹年轻的千里马，在<a href=\"http://www.duwenzhang.com/huati/dengdai/index1.html\">等待</a>着伯乐来发现它。</p>\r\n\r\n<p>　　商人来了，说：你愿意跟我走吗？</p>\r\n\r\n<p>　　马摇摇头说：我是千里马，怎么可能为一个商人驮运货物呢？</p>\r\n\r\n<p>　　士兵来了，说：你愿意跟我走吗？</p>\r\n\r\n<p>　　马摇摇头说：我是千里马，怎么可能为一个普通士兵效力呢？</p>\r\n\r\n<p>　　猎人来了，说：你愿意跟我走吗？</p>\r\n\r\n<p>　　马摇摇头说：我是千里马，怎么可能去当猎人的苦力呢？</p>\r\n\r\n<p>　　日复一日，年复一年，这匹马一直没有找到<a href=\"http://www.duwenzhang.com/huati/lixiang/index1.html\">理想</a>的机会。</p>\r\n\r\n<p>　　一天，钦差大臣奉命来民间寻找千里马。</p>\r\n\r\n<p>　　千里马找到钦差大臣，说：我就是你要找的千里马啊！</p>\r\n\r\n<p>　　钦差大臣问：那你熟悉我们国家的路线吗？</p>\r\n\r\n<p>　　马摇了摇头。</p>\r\n\r\n<p>　　钦差大臣又问：那你上过战场、有作战经验吗？</p>\r\n\r\n<p>　　马摇了摇头。</p>\r\n\r\n<p>　　钦差大臣说：那我要你有什么用呢？</p>\r\n\r\n<p>　　 马说：我能日行千里，夜行八百。钦差大臣让它跑一段路看看。</p>\r\n\r\n<p>　　马用力地向前跑去，但只跑了几步，它就气喘吁吁、汗流浃背了。你老了，不行！钦差大臣说完，转身离去。</p>\r\n\r\n<p>　　今天你做的每一件看似<a href=\"http://www.duwenzhang.com/huati/pingfan/index1.html\">平凡</a>的<a href=\"http://www.duwenzhang.com/huati/nuli/index1.html\">努力</a>都是在为你的未来积累能量，今天 你所经历的每一次不<a href=\"http://www.duwenzhang.com/huati/kaixin/index1.html\">开心</a>、拒绝，都是在为未来打基础！</p>\r\n\r\n<p>　　不要等到老了跑不动了再来<a href=\"http://www.duwenzhang.com/huati/houhui/index1.html\">后悔</a>！</p>\r\n\r\n<p>　　学历不代表有能力，文凭不代表有文化，过去的辉煌都已成为历史和回忆。</p>\r\n\r\n<p>　　所以，昨天怎么样不重要，关键是今天做了什么，明天会怎么样！</p>\r\n\r\n<p>　　<a href=\"http://www.duwenzhang.com/wenzhang/renshengzheli/ganwu/\">感悟</a><a href=\"http://www.duwenzhang.com/wenzhang/renshengzheli/\">人生</a>！<a href=\"http://www.duwenzhang.com/huati/zhenxi/index1.html\">珍惜</a>现在，不要做让自己后悔的事！</p>\r\n', '0', '0', '1', null, null);

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '首页', '0');
INSERT INTO `category` VALUES ('2', '干净的圈子.', '0');
INSERT INTO `category` VALUES ('3', '规律的生活.', '0');
INSERT INTO `category` VALUES ('4', '中意的人.', '0');
INSERT INTO `category` VALUES ('5', '余生还长.', '2');
INSERT INTO `category` VALUES ('6', '愿心腹几人.', '2');
INSERT INTO `category` VALUES ('7', '深远长流.', '2');
INSERT INTO `category` VALUES ('8', '共勉当下.', '2');
INSERT INTO `category` VALUES ('9', '一壶清酒.', '3');
INSERT INTO `category` VALUES ('10', '不诉清风.', '3');
INSERT INTO `category` VALUES ('11', '不允明月.', '3');
INSERT INTO `category` VALUES ('12', '只等你归', '3');
