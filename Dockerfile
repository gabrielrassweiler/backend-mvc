FROM php:8.2-alpine

# Instala as bibliotecas necessárias
RUN apk add --no-cache postgresql-dev git

RUN docker-php-ext-install pdo pdo_pgsql

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Define o diretório de trabalho
WORKDIR /var/www/html/

# Copia o arquivo composer.json para o diretório de trabalho
COPY composer.json .

# Executa o Composer
RUN composer install

# Copia o restante dos arquivos do projeto para o diretório de trabalho
COPY . .

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html/"]
