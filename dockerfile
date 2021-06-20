FROM php:7.4-apache
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
