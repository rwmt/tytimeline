
## 天佑时光轴 TianYou Timeline ##

Update Log
====================
----
[1.2.1.150608b]
----
### change ###
* 优化了后台轮播图显示顺序以及按钮图标

----
[1.2.0.150606b]
----
### add ###
* 增加了用户反馈系统
* 增加了免责声明
* **增加了用户操作活动提示信息**
* 增加了几处操作推送信息

### change ###
* 修改了底部栏样式
* 修改了modalConfirm参数表

### fixed ###
* 修复了页面高度不足导致的底部栏显示不正确的bug

----
[1.1.5.150604b]
----
### fixed ###
* 修复了用户没有收藏分享时不显示正确的页面
* 修复了分享详情页面没有正确显示用户最近分享信息

----
[1.1.4.150601b]
----
### add ###
* 增加了设置热门话题功能

### change ###
* 增加了缩略图分辨率并保留原图
* 修改了标签输出的透明度以及去除了灰色标签
* 修改了进入后台的入口位置

### fixed ###
* 修复了一些BUG
* 修复了添加分享时的各项数据刷新
* 修复了初始化类时没有继承common类的初始化导致的站点配置没有正确读取
* 修复了点击量延时自增出现的问题
* 优化了搜索窗口失去焦点时的反应
* 修复了登陆窗口可以按回车登陆

----
[1.1.3.150531b]
----
### add ###
* 首页增加了活跃用户模块和热门标签模块
* 增加了搜索功能

### change ###
* 统一了用户面板元件

### delete ###
* 用户没有描述信息时不再显示默认信息

----
[1.1.2.150528b]
----
### add ###
* 增加了查看已收藏的页面
* 增加了分享的热度属性，首页按热度排序
* 增加了后台管理分享面板的缩略图
* 增加了非在校用户注册入口

### fixed ###
* 修复了清除缓存没有清干净的问题
* 修改了share_like数据存储方式为json
* 修复了上传分享时点击取消后按钮不会恢复

### delete ###
* 删除了一些冗余操作

----
[1.1.1.150527b]
----
### add ###
* 后台增加了清除缓存功能
* 增加了banner管理面板

### fixed ###
* 修复了首页布局缓存问题
* 修正了首页轮播图排序问题
* 修正了__ROOT__地址问题
* 修复了banner引用用户水印问题

----
[1.1.0.150524b]
----
### add ###
* 增加了用户评论的头像
* 增加了广场页面的图片懒加载插件

### fixed ###
* 修复了服务器地址更变导致的一些目录错误

### change ###
* 修改了站点meta信息

----
[1.0.3.150513b]
----
### add ###
* 后台增加对分类的管理
* 增加了公共css和公共js

### change ###
* 整站风格调整

### fixed ###
* 修复了分类状态为“首页不显示”时产生的某些不显示bug
* 部分页面样式bug修复
* 修复了后台无法正常显示modal的问题
* 限制了标签页显示标签的数量

----
[1.0.2.150512b]
----
### add ###
* 补充了标签详情页面内容部分
* 增加了分享详情页右侧边栏内容
* 增加路由支持

### change ###
* 修改了 `am-g-fixed` 样式使用全局统一限制宽度
* 修改了首页布局

### fixed ###
* 限制了首页每个分类只显示3行
* 细节优化:首页分享信息没有链接到用户和分类
* 增加了首页不读取缓存以适应首页布局变化
* 对代码框架进行了优化，增加了公共控制器
* 修复了 wookmark 对其下所有 li 元素的不合理控制

----
[1.0.1.150511b]
----
### change ###
* banner 宽高比改为2.35:1，具体高度为 `1920x817` , `960x408`

### fixed ###
* 优化了部分 JavaScript 代码
* 对 imgbox 底部分享信息显示进行了排版
* 对 `Shard/detail` 页面进行了排版优化

----
[1.0.0.150510] 首次公开测试
----
### add ###
* 增加了统计代码

### change ###
* 使用 `imgbox` 替换了 `lightwindow` 灯箱插件

### fixed ###
* (伪)修复了标签页面产生了空白标签的问题
* 修复了app.js可能报错的bug

----
[0.1.18.150509b]
----
### add ###
* 增加了 `amaze modal` 模态窗替代 `avgrund.js` 插件
* 增加了异步加载模态窗口
* 增加了对IE9及以下浏览器的友情跳转 `Fuck IE`

----
[0.1.17.150508b]
----
### add ###
* 增加了模态 popup 插件
* 增加了全站 ajax 无跳转登陆登出功能

----
[0.1.16.150506b]
----
### add ###
* 增加了添加标签时点击热门标签自动填入
* 增加了操作分享时刷新各页面总分享数

### fixed ###
* 修复了当修改一个不存在的分享时提示错误
* 修正了部分页面的样式
 * `Tag/index` 标签列表的排版，提升了特殊标签的权重
 * `Shard/detail` 追加了拍摄时间
 * `Shard/modi` 增加了背景遮罩，支持了中文日期选择
* 重写了修改分享时的tag处理算法

----
[0.1.15.150504a]
----
### fixed ###
* 修复了tag存储方式改为json后遗留的 `Tag/detail` 页面产生的错误
* 修复了横向瀑布流有多个分类时产生的错误排版

----
[0.1.14.150503a]
----
### add ###
* 新增了 `tag` 表的 `status` 字段

		tytl_tag:
			status tinyint(4); // 1(default):正常,2:推荐,0:禁用
* 新增了上传分享时自动根据分辨率判断壁纸，并添加1号标签(1号标签为壁纸)

### fixed ###
* 修复了详情页面引入 `prototype.js` 带来的 jQ 冲突问题
* tag 存储方式改为 json 串

----
[0.1.13.150503a]
----
### add ###
* 增加了灯箱插件 `lightwindow` 替换原有的 `lightbox2`

### fixed ###
* 优化了分享详情页面的评论功能和评论面板背景
* 修复了分享详情页面无法点开大图

----
[0.1.12.150503a]
----
### add ###
* 增加了根据图像EXIF信息辅助确定图像时间

### fixed ###
* 修改了 `DatetimePicker` 插件替代原有插件

----
[0.1.11.150503a]
----
### add ###
* **增加了分类页横向瀑布流布局**
* 增加了字符串截取函数 `substring()`

----
[0.1.10.150502a]
----
### add ###
* 增加了后台方法 `is_super_admin()` 用来判断是否超级管理员
* 增加了用户组的管理

### fixed ###
* 修复了修改分享时的标签提示信息
* 优化了上传分享时的按钮互动
* 修复了管理用户组入口错误
* 暂时移除广场页面的分类，酝酿更优显示方法

----
[0.1.9.150502a]
----
### add ###
* 增加了 banner 管理系统 , 使用了 `Jcrop` 插件进行轮播图的裁切
* 增加了轮播图表 `banner`

		tytl_banner:
			banner_id unsigned int(10) pk,
			source int(11), //用户id, -1系统添加
			status tinyint(4), // 1显示 0隐藏
			sort smallint(6),
			savename varchar(255),
			create_time int(10);
* 增加了分享和轮播图的文字水印

### fixed ###
* 前台 banner 数据来源更改
* 修改了各页面背景图片

----
[0.1.8.150501a]
----
### add ###
* 增加了站点版本号管理
* 增加了配置表 `tytl_config` 

		tytl_config:
			config_id unsinged int(10) pk,
			key varchar(255),
			value text,
			attr tinyint(4), // 0：必须，1(default)：可擦除
			comment varchar(255); // 备注
* 增加了后台配置管理系统

### fixed ###
* 修复了登陆时外网用户不同步登陆
* 完善了后台页面相关功能
 * 后台管理首页
 * 标签管理
 * 分享管理
 * 分类管理
 * 会员管理
 * 站点信息

----
[0.1.7.150422a]
----
### add ###
* 增加了分类表 `tytl_catalog` 和分享表的分类字段

		tytl_catalog:
			catalog_id unsigned int(4) pk,
			catalog_name varchar(20),
			sort int(4),
			status int(4),//分类状态，默认值1
			total_share int(8);
		tytl_share:
			catalog_id unsigned int(4);
* 增加了分类页面
* 增加了各分享的分类信息

### fixed ###
* 修复了IE下搜索框的大小问题

----
[0.1.6.150415a]
----
### add ###
* 增加了用户头像
* 增加了用户详情页面
* 增加了判断是否移动端的方法

### fixed ###
* 标签输入框更改为 `tagsinput` 插件
* 优化了标签页面，使用了 `wookmark` 的 flite 样式
* 优化了404页面

----
[0.1.5.150411a]
----
### add ###
* 增加了标签详情页面
* 增加了登陆IP字段 `lastlogin_ip` 性别字段 `gander` 分享的总评论字段 `total_comments` 和评论表 `tytl_comment`

		tytl_user:
			lastlogin_ip varchar(255);
		tytl_user_info:
			gander varchar(255);
		tytl_share:
			total_comments int(8); //总评论数
		tytl_comment: //新表
			comment_id unsigned int(12),
			share_id unsigned int(11),
			user_id unsigned int(8),
			detail varchar(255),
			create_time int(12),
			admire int(8); //被赞数
* 增加了图片的点击量自增
* 增加了站点的 `logo` 和 `favicon` ，感谢 **郭书昊** 提供的素材

### fixed ###
* **前端css框架更新至 `amaze ui 2.3.0`**
* **重构了首页瀑布流，改用 `wookmark` 样式**
* 修复了IE下的一些布局BUG
* 修复了未登录时查看分享详情，页面会报错
* 修复了删除分享时 `total_share` 字段的处理
* 修复了广场页面达人板块的用户组标签颜色错误显示
* 优化了按比例计算高度的方法 `get_t_height()`
* 优化了取得分享“喜欢”状态的方法 `get_like_status`
* 优化了取得操作权限的方法 `get_auth()` 增加第三个id参数为辅助判断参数
* 优化了广场页面视觉样式为 `wookmark` 瀑布流

### delete ###

* **移除了多说评论插件，替换为原生评论系统**

----
[0.1.4.150407a]
----
**内部测试版本**

### add ###

* 增加了创建分享时的宽高计算
* 增加了分享的宽高，数据库增加字段：

		tytl_share:
			width int(6),
			height int(6);
* 增加了以彩色的badge方式显示tag

### fixed ###

* 修复了访问网址share_id为不存在的项时会出现不友好的错误提示
* 修复了 `$this -> error();` 不会显示对应的错误提示信息
* 修正了上传分享时 `total_share` 字段自增，以及删除时的自减
* 优化了广场页面以及tag页面
* 优化了首页页脚的显示方法
* 进一步优化了时光轴页面

----
[0.1.3.150405]
----
### add ####

* 增加了修改分享信息的功能
* 增加了操作权限的判断

### fixed ###

* **修改了时光轴显示方法**
* 优化了分享详情页面
* 修改了标签分隔符为空格

----
[0.1.2.150402]
----
### add ###

* 增加了“试试手气”功能
* 增加了“广场”页面
* 增加了“标签”页面
* 增加了“喜欢”功能
* 增加了多说评论插件
* 增加了后台管理页面

### fixed ###

* **修改了时光轴页面，创意源自 `GBtags.com`**
* 修复了注册用户时没有初始化用户信息表`tytl_user_info`

----
[0.1.1.150215]
----
### add ###

* 增加了注册页面自动验证长度以及有效性
* 增加了修改分享信息页面自动处理以及验证有效性
* 增加了首页分享的工具条
* 增加了首页瀑布流布局
* 增加了首页顶部导航栏

### fixed ###

* 修复了首页在某些情况下出现横向滚动条
* 修改了图片分享方式为ajax处理

----
[0.1.0.150201]
----
### init ###

* 初步建立了前台页面以及后台部分页面
