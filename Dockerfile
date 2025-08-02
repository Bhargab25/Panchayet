# Use the official PHP image with Apache
FROM php:8.3-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libpq-dev && \
    docker-php-ext-install  pdo pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*    

WORKDIR /var/www/html

# Use --chown to set ownership during copy (Docker 17.09+)
COPY --chown=www-data:www-data app/ /var/www/html

COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf


EXPOSE 9443

RUN a2enmod rewrite
RUN a2enmod dir
RUN a2enmod rewrite ssl
RUN echo "Listen 9484" >> /etc/apache2/ports.conf
RUN echo "ServerName demo.kustav.co.in" >> /etc/apache2/apache2.conf
RUN a2ensite 000-default.conf

CMD ["apache2-foreground"]
