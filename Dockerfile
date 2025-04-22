FROM php:8.3-fpm

WORKDIR /var/www

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 777 /var/www/storage /var/www/bootstrap/cache

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*


ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www

EXPOSE 9000
CMD ["php-fpm"]
