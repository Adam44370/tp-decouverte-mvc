FROM php:8.2-apache

# Installer extensions PHP nécessaires à CakePHP
RUN docker-php-ext-install pdo pdo_mysql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet
COPY . /var/www/html

# Se placer dans le dossier du projet
WORKDIR /var/www/html

# Installer les dépendances CakePHP
RUN composer install --no-dev --optimize-autoloader

# Droits Apache
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

