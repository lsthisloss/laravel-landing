FROM php:8.3-fpm

# Копируем конфигурацию PHP (если у тебя есть кастомный php.ini, иначе можно убрать)
#COPY php.ini /usr/local/etc/php/

# Устанавливаем зависимости и расширения для Laravel
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www

EXPOSE 9000
CMD ["php-fpm"]
