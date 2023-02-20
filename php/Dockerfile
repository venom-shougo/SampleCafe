FROM php:8.1-apache

WORKDIR /var/www/html

# 時間指定
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y tzdata && \
    ln -fs /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata

# 正規表現ライブラリ、zip アーカイブの読み取り、作成、および変更用のライブラリ、およびその他の必要なライブラリをインストール
RUN apt-get update && \
    apt-get install -y libonig-dev libzip-dev unzip libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    docker-php-ext-install mbstring pdo_mysql zip gd

# Docker コンテナーに PHP Zip 拡張機能をインストール
RUN apt-get update && apt-get install -y libzip-dev \
    && docker-php-ext-install zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# # postfix、nano、sudo、mailutils をインストール
# ARG DEBIAN_FRONTEND=noninteractive
# RUN apt-get update && \
#     apt-get install -y postfix libsasl2-modules syslog-ng nano sudo mailutils

# PHP 拡張機能のインストールを自動化
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# composer のインストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# ファイルのコピー
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY php.ini-development /usr/local/etc/php/php.ini
# COPY main.cf /etc/postfix/main.cf
# COPY master.cf /etc/postfix/master.cf
