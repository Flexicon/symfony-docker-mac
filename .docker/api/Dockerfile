FROM php:7.2-fpm

WORKDIR /app

COPY php.ini /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

RUN apt-get update && \
    apt-get install -y \
    nano \
    htop \
    git \
    zip \
    unzip \
    zlib1g-dev \
    wget \
    libxrender1 \
    libfontconfig \
    mysql-client

RUN docker-php-ext-install \
    zip \
    pdo_mysql

ENV COMPOSER_ALLOW_SUPERUSER 1
RUN composer --global config process-timeout 2000
