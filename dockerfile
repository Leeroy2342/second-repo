FROM php:7.4-apache
RUN apt-get update && apt-get upgrade -y &&\
    docker-php-ext-install mysqli
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
