#### 简介
根据swoft的目录来进行在处理的目录.如果不懂swoft.请移至[swoft](https://www.swoft.org).
#### 安装
```
git clone https://github.com/AdolphGithub/swoft.git swoft
```
原谅我如此处理,后期会使用composer create project里进行处理.先尝鲜吧.
#### 约定
module配置 > 公共配置.例如:
```
在common\config\server.php中,setting.worker_num = 1
但在admin\config\server.php setting.worker_num = 3
结果会以admin的为准.
```
不要问这么多为什么,请自行查看代码.
#### 目录说明
```
admin/  后台管理,可以这么理解. admin.domain.com
www/    前台管理,可以这么理解. www.domain.com
common/ 公共模块,例如一些公共的配置.还有模型都可以放到这里处理.
```
#### 使用
```
php admin/bin/swoft start   启动前台模块
php www/bin/swoft start     启动后台模块
```
原谅我懒,并不能全部的支持swoft的命令.so,请不要使用命令行来进行创建Controller和一些其他的东西.
###### ps.后期遵守但不一定会按照swoft的命令来进行处理.
#### 新增module
如何新增一个module,eg.example
```
1. 复制已有的admin或者www一份重新命名文件夹为example.
2. 修改composer.json的psr-4中增加,"example\\app\\": "example/app/"
3. 执行命令composr dump-autoload
4. 修改命名空间example/app/Controllers下的控制器改为example/app/Controllers
5. 修改example/app/Swoft.php的命令空间改为.example/app;
6. 修改example/config/define.php的MODULE_NAME为example.
7. 执行php example/bin/swoft start.
```
如果端口有冲突,请修改对应module下面的.env文件.
#### 最后
如有人在使用的过程中,有任何不适.请告知我.[swoft文档的友情链接](https://github.com/swoft-cloud/swoft)