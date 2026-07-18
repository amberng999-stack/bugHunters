FROM php:8.3-cli-alpine

RUN apk add --no-cache \
    git \
    unzip \
    sqlite-dev \
    libpng-dev \
    libxml2-dev \
    icu-dev \
    oniguruma-dev

RUN docker-php-ext-install pdo pdo_sqlite mbstring bcmath intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p storage/framework/views storage/framework/cache storage/framework/sessions storage/logs database \
    && touch database/database.sqlite \
    && chmod -R 777 storage database

EXPOSE 10000

CMD ["sh", "-c", "php artisan key:generate --force && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000"]
