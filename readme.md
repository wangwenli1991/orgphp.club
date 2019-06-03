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


内置数据库

做到写分类目录,菜单目录调试中
目录点击做跳转好了
单个信息多表联查目录名称待解决 ??

0603
yy6080_vod 8.6M 和mac_vod 1.5M 存放的是电影内容数据
最下面yy6080_vod_type 存放的是电影类别
同时查上面两个表的d_type和t_sort 确定t_name的类型
待解决： 遍历homecontroller输出到index
