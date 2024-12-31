FROM ubuntu:20.04

# Mise à jour des packages et installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    php-mysqli \
    php-gd \
    mysql-client \
    curl \
    unzip \
    && apt-get clean

# Copier le fichier de configuration Apache (vhost.conf)
COPY ansible/vhost.conf.j2 /etc/apache2/sites-available/000-default.conf

# Activer le module rewrite d'Apache
RUN a2enmod rewrite

# Copie de tous les fichiers du projet dans le conteneur
COPY . /var/www/html/

# Installer Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 80 pour accéder à l'application via HTTP
EXPOSE 80

# Lancer Apache en mode foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]
