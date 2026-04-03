FROM php:8.2-apache

# Ensure only prefork MPM is enabled
RUN set -eux; \
    a2dismod mpm_event mpm_worker || true; \
    a2enmod mpm_prefork

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
