# Utiliser une image PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers du projet dans le conteneur
COPY . /var/www/html/

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
