FROM php:8-apache

WORKDIR /var/www/html/

COPY . .

EXPOSE 80

RUN chown -R www-data:www-data /var/www

RUN chown -R 777 /var/www/html/