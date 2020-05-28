


<h1 align="left">lavarelCms</h1>



此项目为快速建站，节省建站时间。





## 运行环境要求

- Nginx 1.8+
- PHP 7.2+
- MySQL 5.7.7+ 数据库类型 utf8mb4

## 开发环境部署/安装

本项目代码使用 PHP 框架 [Laravel 7](https://learnku.com/docs/laravel/7.x) 开发，本地开发环境使用Mamp套件

下文将在假定读者已经熟悉lavarel 并且了解 composer

### 基础安装

#### 克隆源代码

克隆源代码到本地：

    > git clone https://github.com/chenweibo/laravelCms.git




#### 安装扩展包依赖

	composer install

#### 生成配置文件

```
cp .env.example .env
```

你可以根据情况修改 `.env` 文件里的内容，如数据库连接、缓存、邮件设置等：

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
....
```



#### 生成秘钥

```shell
$ php artisan key:generate
```

#### 生成数据表及生成测试数据

在的网站根目录下运行以下命令

```shell
$ php artisan rest:db
```
初始的用户角色权限已使用数据迁移生成。

#### 创建软连接

```shell
$ php artisan storage:link
```


>如果创建失败,移动到 public 运行 rm storage

#### 启动项目

在的网站根目录下运行以下命令

```shell
$ php artisan serve
```



### 链接入口

* 首页地址：http://127.0.0.1:8000
* 管理后台：http://127.0.0.1:8000/dycm/index.html
* username:563960993@qq.com
* password:dycm123456

管理员账号请自己添加 UserSeeder 修改。

至此, 安装完成 。

## 扩展包使用情况


| **扩展包** | **一句话描述** | **本项目应用场景** |
| ---- | ---- | ---- | 
| [overtrue/laravel-lang](https://github.com/overtrue/laravel-lang) | Laravel 多语言 | 报错信息本地化 |
| [overtrue/laravel-uploader](https://github.com/overtrue/laravel-uploader) | Laravel 上传功能封装 | 文件上传 |
| [Intervention/image](https://github.com/Intervention/image) | 图片处理功能库 | 用于图片裁切 |
| [guzzlehttp/guzzle](https://github.com/guzzle/guzzle) | HTTP 请求套件 |    |
| [overtrue/laravel-wechat](https://github.com/overtrue/laravel-wechat) | 非官方微信集成包 | 用于俄日新开发    |
| [laravel/sanctum](https://github.com/laravel/sanctum) | lavarel官方jwt登录包  | 用于后台授权   |
| [laravolt/avatar](https://github.com/laravolt/avatar) | 生成用户头像 | 用户头像 |
| [tucker-eric/eloquentfilter](https://github.com/tucker-eric/eloquentfilter) | 模型字段过滤 | 接口字段过滤 |



## 自定义 Artisan 命令

| 命令行名字 | 说明 | Cron | 代码调用 |
| --- | --- | --- | --- |
| `rest:db` |  数据迁移，生成表结构及测试内容| 无 | 无 |




## License 

MIT
