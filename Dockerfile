FROM php:fpm-alpine
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
