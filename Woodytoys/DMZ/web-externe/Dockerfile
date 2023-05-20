FROM php:8.0-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

RUN mkdir /var/log/apache2/html
RUN mkdir /var/log/apache2/php

COPY ./sites/ /var/www/

COPY ./config/ports.conf /etc/apache2/
COPY ./config/apache2.conf /etc/apache2/
COPY ./config/sites/b2b.conf /etc/apache2/sites-available/
COPY ./config/sites/vitrine.conf /etc/apache2/sites-available/

#COPY ./ssl/ /etc/ssl/
#RUN a2enmod ssl

RUN a2dissite 000-default.conf

RUN a2ensite vitrine.conf   
RUN a2ensite b2b.conf