# composer

## 概念

- 是一个依赖管理工具
- 库： 别人写好的工具库，提供很多的功能
- 好处： 不需要重复造轮子 (office的操作)
    - office
        - excel： 导出数据库中的用户表，导出为excel文件
        
## 作用

- 防止重复造轮子
- 控制依赖库的版本


## 怎么使用

### 安装

- 通过yum
- 通过下载

### 使用

- 创建 composer.json
- 安装 composer install
- 导入 `require autoload.php`

### 目录结构
- vendor
    - composer          提供自动载入功能
    - monolog           依赖库文件
    - psr               依赖库的一部分
    - autoload.php      自动载入功能入口


## 以往过程中怎么使用

- 怎么写日志
    - 定义一个函数，向一个文件中写入字符串 file_put_contents()
        - 缺点：可使用范围小，功能少