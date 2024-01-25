FROM composer as prev

WORKDIR /app
COPY . .
RUN composer install

FROM php:apache

COPY --from=prev /app /var/www/html
RUN chown -R www-data:www-data /var/www
