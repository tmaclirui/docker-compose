FROM php:7-fpm
MAINTAINER  LiRui <717810674@qq.com>

RUN docker-php-ext-install pdo_mysql mysqli
RUN   apt-get update  && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
# RUN sed 's/^;extension=php_pdo_mysql\.dll/extension=pdo_mysql.so/' -i /usr/local/etc/php/php.ini
# RUN sed 's/^;extension=php_mysqli\.dll/extension=mysqli.so/' -i /usr/local/etc/php/php.ini

