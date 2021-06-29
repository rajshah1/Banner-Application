FROM httpd:2.4.43

COPY . /usr/local/apache2/htdocs

RUN mkdir -p /usr/local/apache2/htdocs/var/cache
RUN chown -R www-data:www-data /usr/local/apache2