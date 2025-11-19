FROM php:8.1-apache

# Install system packages + PHP extensions (including mailparse via PECL)
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libzip-dev libpng-dev libonig-dev libxml2-dev \
    autoconf make gcc \
  && pecl install mailparse \
  && docker-php-ext-install intl zip pdo pdo_mysql gd xml \
  && docker-php-ext-enable mailparse \
  && a2enmod rewrite \
  && rm -rf /var/lib/apt/lists/*


# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . /var/www/html

# Use public/ as the document root
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Prepare .env from example if present
RUN if [ -f .env.example ]; then cp .env.example .env; fi

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-scripts --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data var public || true

# Our runtime entrypoint (handles migrations + cache)
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

CMD ["docker-entrypoint.sh"]
