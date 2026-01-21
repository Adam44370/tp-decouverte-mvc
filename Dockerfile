FROM php:8.2-apache

# Extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Définir webroot comme dossier public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/webroot

# Mettre à jour la config Apache
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# Copier le projet
COPY . /var/www/html

# Droits
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

