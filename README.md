# [33号铺](http://33pu.net) #

33号铺是一个简单好用的淘宝客瀑布流发布、管理系统。demo：[33号铺](http://33pu.net)

## 下载 ##
Clone代码到本地，`git clone git://github.com/yuguo/33pu.git`

## 安装 ##
1. 配置application/config为你的站点url
2. 配置application/database中的 `username`，`password`，`database`
3. 访问 站点url/login/install，输入管理员的email和密码
4. 访问 站点url/login 登录
5. 访问 站点url/admin/cat 新增你的站点的商品类别（类别会出现在首页tab中）
6. 访问 站点url/admin ，选择类别之后搜索关键词，点击某个条目之后再选择图片，条目就会出现在首页（请选择类别之后再搜索关键词，这样条目会自动添加到该类别）

## 说明 ##
- 【重要】请自己配置application/models/m_taobaoapi.php中的淘宝客PID
- 后台搜索的时候的过滤条件在后台配置是，您可以自己修改配置application/models/m_taobaoapi.php：
	- 佣金比5% - 50%
	- 天猫商品
	- 按卖家信用排序
	- 每页80条
- 关于为什么要想到做这个系统的两篇文章：[先做一半](http://yuguo.us/weblog/half-first/) [利用淘宝API构建淘宝客自动发布系统](http://yuguo.us/weblog/a-cps-cms-build-with-taobao-api/) 

## 联系 ##
- 代码还是有很多问题，还在努力修复中，用户oauth登录的功能也在做
- 别加QQ，有问题可以email我：fishguo321@gmail.com