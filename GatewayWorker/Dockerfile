FROM php:5.6-apache
#安装php各种扩展
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libcurl4-openssl-dev && rm -rf /var/lib/apt/lists/* \
        && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
        && docker-php-ext-install gd curl \
    && docker-php-ext-install -j$(nproc) pdo_mysql mysql mysqli
#启用apache的rewite模块
RUN a2enmod rewrite
#拷贝源码
COPY ./ /var/www/html/
#修改权限
RUN chmod -R 777 /var/www/html

EXPOSE 80
