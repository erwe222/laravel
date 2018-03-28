
### 1. 克隆项目 git clone git@github.com:raoyuandong/laravel.git

### 2. 下载laravel依赖包 composer install

### 3. 在项目根目录下创建 .env 文件  将 .env.example 文件中的内容复制到.env中

### 4. 运行 php artisan key:generate 命令生成 APP_KEY

### 5. Linux下修改执行  chmod -R 777 ./storage  命令修改 storage文件夹权限

### 6.创建数据表 php artisan migrate

### 7.执行数据迁移命令 php artisan db:seed
