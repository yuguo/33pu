# [33号铺](http://33pu.net) #

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
1. 配置 `application/config/config.php` 为你的站点url，配置 `application/config/site_info.php` 中的站点名称、appkey、secret还有最重要的taobaoke pid。具体见说明。
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

## Apache配置说明 ##
	
如果你不爽url后面都跟着一大串`index.php`，那么可以在站点根目录加上`.htaccess`文件，参考`.htaccess.example`即可。

比如`http://localhost/33pu/` 即为 `33pu` ，如果是在根目录比如 `http://localhost/` 即为 `/`。

增加`.htaccess`文件之后，再修改`application/config/config.php`的

	$config['index_page'] = 'index.php';

修改为

	$config['index_page'] = '';

这样在访问站点的时候就不再需要加上index.php。

## Nginx配置说明 ##

<pre>location / {
	index index.php;
	if (-f $request_filename/index.php){
	        rewrite (.*) $1/index.php;
	}
	if (!-f $request_filename){
	        rewrite (.*) /index.php;
	}
}</pre>

同理，再修改`application/config/config.php`的

	$config['index_page'] = 'index.php';

修改为

	$config['index_page'] = '';

这样在访问站点的时候就不再需要加上index.php。

## 联系 ##

遇到问题先看[FAQ](https://github.com/yuguo/33pu/wiki/FAQ)，再更新到最新版看看问题有无解决，如果还有问题请联系Yuguo。

代码还在不断完善中，有任何意见和建议：

- QQ群：230831981（敲门砖：33号铺）
- Email：fishguo321@gmail.com
- 腾讯微博：[http://t.qq.com/chandleryu](http://t.qq.com/chandleryu)
- Twitter：[yuguo](https://twitter.com/yuguo)
- 个人主页：[http://yuguo.us](http://yuguo.us)