FROM php:7.4-apache
RUN apt-get update && apt-get upgrade -y &&\
    docker-php-ext-install php-mysql
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
