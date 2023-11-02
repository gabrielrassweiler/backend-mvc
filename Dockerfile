FROM php:7.2-apache

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia o arquivo composer.json para o diretório de trabalho
COPY composer.json /var/www/html/

# Executa o Composer
RUN composer install

# Copia o restante dos arquivos do projeto para o diretório de trabalho
COPY . /var/www/html/

EXPOSE 80
