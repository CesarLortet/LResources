FROM php:8.1-apache as build

# COPYING APP
WORKDIR /var/www/html

COPY ./app  .