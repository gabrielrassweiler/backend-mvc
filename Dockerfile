FROM php:8.2-apache

# Instala o git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia o arquivo composer.json para o diretório de trabalho
COPY composer.json /var/www/html/

# Executa o Composer
RUN composer install

# Copia o restante dos arquivos do projeto para o diretório de trabalho
COPY . /var/www/html/

EXPOSE 80
