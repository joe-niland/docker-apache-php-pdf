FROM php:7.3-apache

COPY web/ /var/www/html
COPY pdf/ /var/www/pdf

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN a2enmod rewrite &&\
    service apache2 restart