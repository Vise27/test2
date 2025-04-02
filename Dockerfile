#Imagen de phph 
FROM php:8.1-apache

#Instalacion de dependencias
RUN apt-get update && apt-get install -y \
    libpq-dev\
    && docker-php-ext-install pdo pdo_pgsql

##copiamos todo el contenido de mi proyecto a el de php   
COPY . /var/www/html/

##exponemos el puerto 80
EXPOSE 80