FROM php:7.4-apache
RUN docker-php-ext-install pdo
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
