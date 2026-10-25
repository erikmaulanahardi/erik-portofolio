
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libsqlite3-dev \
    libonig-dev libxml2-dev curl nodejs npm \
    && docker-php-ext-install pdo pdo_sqlite mbstring \
       xml zip \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader \
    && npm install \
    && npm run build \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:10000>/' \
       /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]
