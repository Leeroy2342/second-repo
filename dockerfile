FROM php:7.4-apache
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
