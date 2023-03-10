FROM php:8.2-fpm-alpine3.17

WORKDIR /var/www/html/

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN apk add --update linux-headers \
    && apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug

RUN docker-php-ext-install opcache

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

COPY ./php-extension/xdebug.ini /usr/local/etc/php/conf.d/

COPY ./php-extension/opcache.ini /usr/local/etc/php/conf.d/

COPY ./nginx/server.conf /etc/nginx/conf.d
