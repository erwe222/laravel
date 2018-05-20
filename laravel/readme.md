
### 1. 克隆项目 git clone git@github.com:raoyuandong/laravel.git

### 2. 下载laravel依赖包 composer install

### 3. 在项目根目录下创建 .env 文件  将 .env.example 文件中的内容复制到.env中

### 4. 运行 php artisan key:generate 命令生成 APP_KEY

### 5. Linux下修改执行  chmod -R 777 ./storage  命令修改 storage文件夹权限

### 6.创建数据表 php artisan migrate

### 7.执行数据迁移命令 php artisan db:seed

## 安装 node.js 运行一下命令
### 1. npm install -g laravel-echo
### 2. npm install -g laravel-echo-server
### 3. npm install -g gulp 
### 4. 初始化服务端 laravel-echo-server 服务  laravel-echo-server init
### 5. 启动服务端 laravel-echo-server   服务  laravel-echo-server start
### 6. 检测下socket.io客户端url地址是否可访问  http://your_host_address:6001/socket.io/socket.io.js