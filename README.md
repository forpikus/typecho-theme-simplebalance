# Typecho主题 - simplebalance
说明：该项目来源于[maupassant](https://github.com/pagecho/maupassant/)，在此项目的基础上做了进一步修改。

## Description
SimpleBalance名字来自Forpikus Team的Blog -- ```Discover a balance point```，项目Fork自Cho's Maupassant，关于Maupassant可以在GitHub上找到项目（链接在开头）。

```Discover a balance point```使用了SimpleBalance作为默认的theme，在Blog生效期间，Forpikus Team将会维护这个项目，目前SimpleBalance为了配合Forpikus Team只提供了英文界面，后期将加入多语言支持。

## ScreenShot
![][screenshot]

## Features
- ```oncoming``` 可定制的文章权限控制，在发布的文章后新建一个名为```private```的自定义字段，便可阻止访客浏览该文章
- ```incoming, 0.9.4+``` 代码部分可以通过```##### main.h {.codefile}```来在代码区域前显示一个文件名
- ```incoming, 0.9.4+``` 自动的响应式类别导航栏
- ```0.9.3+``` 可更改的友情链接设置

## Changelog
- **changelog-0.9.4**
    - 变更highlight.js为xcode皮肤
    - 对highlight.js增加了QT 4.8的语言
    - 对highlight.js增加了TEXT的语言，指定text后highlight.js将不再默认为coffeescript。
    - 对pre code的css做了优化显示
    - 对h1,h2,h3的风格做了调整，将部分多余的css属性做了删除
    - 添加了导航栏的自适应能力，在屏幕宽度较小时，会自动隐藏了
    - 对部分js/css使用了**[cdnjs.net][cdnjsnet]**公共服务

## Todo
- ~~\#1: 为主题添加一个Demo ScreenShot~~
- \#2: 修改```private```字段的权限从固定的```administrator```变更为可调整
- \#3: 为Sidebar和NavBar中的分类做可配置调整
- \#4: 为评论提供更好的体验
- \#5: 提供多语言支持（注：Typecho目前部分代码仍然只支持中文，比如日期归档）
- \#6: 提供一个To Top的跟随按钮

## History
- **changelog-0.9.3**
    - 对Post增加了```private```自定义字段来隔离访客查看权限，定义```private```字段后，只有管理员(```administrator```)级别的才可以访问该Post
    - 增加了顶部分类导航栏，修改了导航栏的样式
    - 对前台的评论区域增加了代码自动缩进和接受```Tab```的功能，参考[behave.js][behave]
- **changelog-0.9<init>**
    - 更改了Post的显示方式
    - 更换了中文为英文
    - 使用了```highlight.js```来进行高亮，并使用了**[BootCDN][bootcdn]**的公共服务
    - 添加了友情链接的支持和设置


[bootcdn]: http://bootcdn.cn/
[cdnjsnet]: http://cdnjs.net/
[behave]: http://jakiestfu.github.io/Behave.js
[themeurl]: http://forpikus.com/resources/typecho-theme-simplebalance-0.9.3-20150215.7z
[blog]: http://forpikus.com/blog
[screenshot]: https://raw.githubusercontent.com/forpikus/typecho-theme-simplebalance/master/screenshot.png