# [请注意：33号铺停止更新了！](http://yuguo.us/weblog/33pu-stop-update/) #

我遗憾地决定停止更新[33号铺](https://github.com/yuguo/33pu)，最主要的原因是根据[淘宝新规](http://club.alimama.com/read-htm-tid-4369390.html)，对于API权限有大幅度的削减，对于[API接口开发应用的准入条件](http://open.taobao.com/doc/detail.htm?id=139)修改为以下：

* （一）申请调用淘宝客API接口的淘宝账户（以下简称为“开发者账户”）对应的阿里妈妈账户的淘宝客会员等级为金冠级别及以上；
* （二）申请验证的网站（以下简称为“网站”）应在工业和信息化部信息备案管理系统进行网站备案；
* （四）网站ALEXA排名在10万名及以内；

这几条严格的限制导致包括我本人在内的广大appkey都失去了淘宝客的权限，相信大多数中小网站的appkey也是如此。所以现在很多用33pu做后台的网站都会出现搜索不出任何结果的情况。

33号铺的原理是在后台通过API搜索淘宝的所有商品的佣金，然后一键添加到前台。现在失去了API权限，后台自然无法搜索出任何结果。小淘宝客玩家仍然可以在阿里妈妈的后台手动搜索，然后添加到自己的CMS中去。

我做33号铺的初衷就是希望可以帮助做出更多高质量的长尾淘宝客，所以不做自动抓取，专注体验和分类……但现在淘宝的策略是已经完全抛弃中小淘宝客了。这违背了我的初衷，所以我不再更新了。

做33号铺的过程也是非常有意思的，33号铺也冲上过github的PHP排行榜，在github榜上看见中国人的程序还是很开心的。33号铺还上了[Codeigniter中国](http://codeigniter.org.cn/news/project_33pu)的首页推荐，也非常开心。

最终我没有从33pu中获得任何金钱的奖励，但对我而言，我已经获得了极大的奖励。过程即奖励。

最后，33号铺仍然保持开源，有权限的apikey仍然可以免费使用和修改我的代码，但我本人不再更新了。

对了，33号铺的群还是保持讨论，可以聊聊其它程序，或者营销类、编程类的话题，群号码：230831981，敲门砖”33号铺“。

# 33号铺介绍 #

33号铺是一个简单好用的淘宝客瀑布流发布、管理系统。demo：[33号铺](http://33pu.net)

## 设计理念 ##
33号铺的设计理念是，做一个体验最好的导购系统。

- 相信PGC（Professional Generated Content），而不是蘑菇街那样的UGC。但不排除加入投票系统。
- 相信人工的推荐，而不是机器采集。机器采集的垃圾站我见过很多，大部分是根据taobao API批量拉取数据，这个功能很好做，但是我不希望做自动采集的站点，这对用户是没有好处的。所以33号铺的优化目标是尽量优化人工采集的流程，后台也好，书签也好，url转化也好。
- 重视用户体验，相信用户体验也可以卖钱。所以33号铺会不断优化站长和访客的体验。

## 下载 ##
Clone代码到本地，`git clone git://github.com/yuguo/33pu.git`

或者下载最新的ZIP

## 安装 ##
1. 配置 `application/config/config.php` 为你的站点url，配置 `application/config/site_info.php` 中的站点名称、appkey、secret<del>还有最重要的taobaoke pid</del>。taobaoke pid不再作为参数传入，现在是以自己的开发账户为准，官方解释如下：
	未来pid、nick入参将取消，程序会自动根据appkey对应的nick去查询pid。pid、nick入参将兼容支持到10月31日，请ISV做好改造工作，不要传入pid或nick。
2. 首先自己在数据库中创建一个数据库（比如使用phpmyadmin之类的可视化工具
），然后配置 `application/database` 中的 `username`，`password`，`database`
3. 访问 `站点url/index.php/login/install` ，输入管理员的email和密码
4. 访问 `站点url/index.php/login` 登录
5. 访问 `站点url/index.php/admin/cat` 新增你的站点的商品类别（类别会出现在首页tab中）
6. 访问 `站点url/index.php/admin/cat` 修改类别slug为英文（中文url目前有bug，而且不优雅）
7. 访问 `站点url/index.php/admin` ，选择类别之后搜索关键词，点击某个条目之后再选择图片，条目就会出现在首页（请选择类别之后再搜索关键词，这样条目会自动添加到该类别）
8. 请修改 `application/views/home.php` 底部的统计代码为你自己的百度统计或者Google Analytics.

## 说明 ##
- 后台搜索的时候的过滤条件在后台配置是，您可以自己修改配置`application/models/m_taobaoapi.php`：
	- 佣金比5% - 50%
	- 天猫商品
	- 按卖家信用排序
	- 每页80条
- 关于为什么要想到做这个系统的两篇文章：[先做一半](http://yuguo.us/weblog/half-first/) [利用淘宝API构建淘宝客自动发布系统](http://yuguo.us/weblog/a-cps-cms-build-with-taobao-api/)
- 为了帮助更多人，希望你能保留底部的版权，声明站点是由33号铺构建，但这并不是必须的

## 系统架构 ##

- 整站大部分代码是PHP，基于[CodeIgniter](http://codeigniter.org.cn/)构建，CodeIgniter是一个非常适合快速开发的PHP框架。
- 后台UI基于[Bootstrap](http://twitter.github.com/bootstrap/)构建。
- 整站的JS都是基于[jQuery](http://jquery.com/)构建。
- 数据来源于[淘宝开放平台](http://open.taobao.com/index.htm)。

## 联系 ##

遇到问题先看[wiki](https://github.com/yuguo/33pu/wiki)，再更新到最新版看看问题有无解决，如果还有问题请加QQ群。大家有解决过的问题也可以编辑wiki页，活跃用户提升权限。

代码还在不断完善中，有任何意见和建议：

- QQ群：230831981（敲门砖：33号铺）
- Email：fishguo321@gmail.com
- 腾讯微博：[http://t.qq.com/chandleryu](http://t.qq.com/chandleryu)
- Twitter：[yuguo](https://twitter.com/yuguo)
- 个人主页：[http://yuguo.us](http://yuguo.us)