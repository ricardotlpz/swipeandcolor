FROM php:7.4-apache
COPY . /var/www/html/
RUN chmod -R a+r /var/www/html/
EXPOSE 80