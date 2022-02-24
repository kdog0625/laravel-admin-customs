FROM php:8.1.2-fpm

# COPY php.ini
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# Composer install
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# install Node.js
COPY --from=node:12.14 /usr/local/bin /usr/local/bin
COPY --from=node:12.14 /usr/local/lib /usr/local/lib

#パッケージ管理ツールapt-getの更新と必要パッケージのインストール
RUN apt-get update \
    && apt-get install -y sudo \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql bcmath

WORKDIR /var/www/html