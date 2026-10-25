
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libsqlite3-dev \
    libonig-dev libxml2-dev curl \
    && docker-php-ext-install pdo pdo_sqlite mbstring xml zip \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY --from=node:22-bookworm-slim /usr/local/bin/node /usr/local/bin/
COPY --from=node:22-bookworm-slim /usr/local/lib/node_modules /usr/local/lib/node_modules

RUN ln -sf /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY . .

# Install dependency dan build frontend
RUN composer install --no-dev --optimize-autoloader \
    && npm ci \
    && npm run build \
    && chown -R www-data:www-data storage bootstrap/cache

# pake port 10000
EXPOSE 10000

RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:10000>/' \
       /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]
