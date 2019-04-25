如何安装
需要的环境 > php7  mysql5.6  composer

辅助环境 git  

1  git clone https://github.com/wangwenli1991/orgphp.club.git  
也可以下载到本地解压

2 修改.env.example   .env   修改数据库参数
3 cmd进入目录 composer install
4 php artisan migrate 
5 php artisan db:seed
6 安装完成