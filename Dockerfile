FROM php:8.2-apache

# HARD RESET Apache MPM modules
RUN set -eux; \
    rm -f /etc/apache2/mods-enabled/mpm_*; \
    rm -f /etc/apache2/mods-available/mpm_event.*; \
    rm -f /etc/apache2/mods-available/mpm_worker.*; \
    a2enmod mpm_prefork

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
