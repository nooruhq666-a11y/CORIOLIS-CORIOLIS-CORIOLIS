FROM php:8.2-apache

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Copier tout le projet dans le dossier web d'Apache
COPY . /var/www/html/

# Donner les droits d'écriture pour que valider.php puisse créer donnees.json
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80