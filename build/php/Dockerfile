FROM php:7.4-fpm-buster
RUN apt-get update && apt-get install -y libxml2-dev
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions
RUN  install-php-extensions mysqli pdo_mysql mcrypt zip gd
RUN docker-php-ext-install soap
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
