FROM php:7.4-apache
RUN rm /var/www/htlm/index.php
COPY ./index.php /var/www/html/index.php
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf
