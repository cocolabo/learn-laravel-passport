FROM php:8.0.1-buster

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN echo 'date.timezone = Asia/Tokyo' >> "$PHP_INI_DIR/php.ini"

RUN apt-get update \
    && apt-get install -y \
        vim \
        zip \
        unzip \
        git \
        curl \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libicu-dev

RUN docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql bcmath opcache intl
RUN pecl install xdebug
