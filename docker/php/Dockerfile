FROM php:7.4.11-fpm

RUN apt-get update \
    && apt-get install -y wget git unzip libaio1 libcurl4-gnutls-dev libxml2-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev libxslt1-dev libzip-dev sudo \
    && apt-get clean -y

WORKDIR /usr/lib/oracle/

RUN wget https://download.oracle.com/otn_software/linux/instantclient/19800/instantclient-basiclite-linux.x64-19.8.0.0.0dbru.zip \
    && wget https://download.oracle.com/otn_software/linux/instantclient/19800/instantclient-sdk-linux.x64-19.8.0.0.0dbru.zip \
    && unzip instantclient-basiclite-linux.x64-19.8.0.0.0dbru.zip \
    && unzip instantclient-sdk-linux.x64-19.8.0.0.0dbru.zip \
    && rm -f instantclient-sdk-linux.x64-19.8.0.0.0dbru.zip instantclient-basiclite-linux.x64-19.8.0.0.0dbru.zip \
    && cd instantclient* \
    && rm -f *jdbc* *occi* *mysql* *jar uidrvci genezi adrci \
    && echo /usr/lib/oracle/instantclient* > /etc/ld.so.conf.d/oracle-instantclient.conf \
    && ldconfig

RUN pecl channel-update pecl.php.net

RUN pecl bundle oci8 \
    && docker-php-ext-configure oci8 --with-oci8=instantclient,/usr/lib/oracle/instantclient_19_8 \
    && docker-php-ext-install oci8

RUN docker-php-ext-configure pdo_oci --with-pdo_oci=instantclient,/usr/lib/oracle/instantclient_19_8 \
    && docker-php-ext-install pdo_oci

RUN docker-php-ext-configure gd \
        --with-freetype=/usr/include/ \
        --with-jpeg=/usr/include/

RUN docker-php-ext-install gd
RUN docker-php-ext-install intl
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install soap
RUN docker-php-ext-install xsl
RUN docker-php-ext-install zip

RUN pecl install apcu-5.1.17 \
    && docker-php-ext-enable apcu
RUN pecl install redis-5.0.1 \
    && docker-php-ext-enable redis

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    php composer-setup.php --install-dir=/bin --filename=composer \
    php -r "unlink('composer-setup.php');"

RUN php -- /bin/composer self-update --2

WORKDIR /usr/local/apache2/htdocs/docker/php

RUN chown -R www-data:www-data .
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data /usr/local/var/log

COPY ./entrypoint.sh /usr/local/bin

USER www-data

ENTRYPOINT ["entrypoint.sh"]
CMD ["docker-php-entrypoint", "-F"]
