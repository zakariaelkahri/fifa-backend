FROM php:8.2-apache

# Install MySQL PDO extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite
