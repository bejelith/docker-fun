FROM php:7.1-fpm
RUN pecl install redis-3.1.4 \
    && pecl install xdebug-2.5.0 \
    && docker-php-ext-enable redis xdebug

RUN echo "session.save_handler = redis" >> /usr/local/etc/php/conf.d/docker-php-ext-redis.ini
RUN echo "session.save_path = \"tcp://redis:6379\"" >> /usr/local/etc/php/conf.d/docker-php-ext-redis.ini
