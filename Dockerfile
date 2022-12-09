FROM php:7.2-apache
# Se actualizan los paquetes
RUN apt-get update
# RUN apt-get install software-properties-common dirmngr gnupg2 -y
# Se instalar librerías extras necesarias
RUN apt install -y libicu-dev
RUN apt-get install libcurl4-openssl-dev -y
RUN apt-get install libxml2-dev -y
RUN apt install -y curl
RUN apt-get install unzip -y
# Se instala las extensiones de docker
RUN docker-php-ext-install json 
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-install intl 
RUN docker-php-ext-install curl 
RUN docker-php-ext-install xml 
RUN docker-php-ext-install xmlrpc 
# Se copian los archivos del composer para el proyecto
# COPY ./www/composer.json /var/www/html/composer.json
# COPY ./www/composer.lock /var/www/html/composer.lock
# Solucion al error Apache docker container - Invalid command 'RewriteEngine'
RUN a2enmod rewrite
# Permisos de superusuario para hacer uso del composer
# ENV COMPOSER_ALLOW_SUPERUSER=1
# Descarga de composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer