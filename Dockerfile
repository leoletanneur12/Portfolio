# Utilise une image officielle PHP avec Apache
FROM php:8.2-apache

# Copie tous les fichiers du projet dans le dossier web d’Apache
COPY . /var/www/html/

# Donne les bons droits à Apache
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80 (par défaut pour le web)
EXPOSE 80

# Démarre Apache quand le conteneur démarre
CMD ["apache2-foreground"]
