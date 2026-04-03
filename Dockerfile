FROM php:8.2-apache

# FULL RESET of Apache MPM (force remove all conflicts)
RUN set -eux; \
    rm -rf /etc/apache2/mods-enabled/mpm_*; \
    a2enmod mpm_prefork

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable rewrite
RUN a2enmod rewrite

# Copy files
WORKDIR /var/www/html
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
