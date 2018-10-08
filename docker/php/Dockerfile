FROM php:7.1.3-fpm

RUN docker-php-ext-install pdo_mysql
RUN apt-get update && apt-get install zlib1g-dev -y \
        libmcrypt-dev \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        xvfb libfontconfig wkhtmltopdf \
    && docker-php-ext-install -j$(nproc) mcrypt \
    && docker-php-ext-install -j$(nproc) pdo \
    && docker-php-ext-install -j$(nproc) gd