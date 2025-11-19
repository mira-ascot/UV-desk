FROM php:8.1-apache

# Install system & PHP extensions (including mailparse)
RUN apt-get update \
 && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    autoconf \
    make \
    gcc \
 && pecl install mailparse \
 && docker-php-ext-install intl zip pdo pdo_mysql gd xml \
 && docker-php-ext-enable mailparse \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*

# App code
WORKDIR /var/www/html
COPY . /var/www/html

# Point Apache to public/ as document root
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Create .env from .env.example if needed
RUN if [ -f .env.example ] && [ ! -f .env ]; then cp .env.example .env; fi

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies (NO scripts – avoids cache:clear OOM)
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-interaction --optimize-autoloader --no-scripts

# Permissions (best-effort)
RUN chown -R www-data:www-data /var/www/html || true \
 && find var -type d -exec chmod 775 {} \; 2>/dev/null || true \
 && find var -type f -exec chmod 664 {} \; 2>/dev/null || true

EXPOSE 80
CMD ["apache2-foreground"]
