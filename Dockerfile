
FROM php:8.2-fpm


WORKDIR /var/www


RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


COPY . /var/www


RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache


CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]