FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git unzip curl libsqlite3-dev nodejs npm \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && npm ci && npm run build

EXPOSE $PORT

CMD php artisan serve --host=0.0.0.0 --port=$PORT
