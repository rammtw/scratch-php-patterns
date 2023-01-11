FROM php:8.1-cli
COPY . /usr/src/myapp
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git libzip-dev
RUN docker-php-ext-install zip
WORKDIR /usr/src/myapp
