FROM php:8.2-apache

# Enable required extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files
COPY . /var/www/html/

# Fix Apache MPM issue
RUN a2dismod mpm_event && a2enmod mpm_prefork
