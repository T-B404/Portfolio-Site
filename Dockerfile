FROM php:8.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html/

RUN mkdir -p storage \
    && chown -R www-data:www-data storage \
    && chmod -R 775 storage

COPY docker/start-apache.sh /usr/local/bin/start-apache.sh
RUN chmod +x /usr/local/bin/start-apache.sh

EXPOSE 10000

CMD ["/usr/local/bin/start-apache.sh"]
