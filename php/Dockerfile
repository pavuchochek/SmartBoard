FROM php:8.1-fpm

# Installer les dépendances système et le client MySQL
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    mariadb-client \
    && apt-get clean && rm -rf 

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obtenir Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le code de l'application
COPY application /var/www/html
WORKDIR /var/www/html

# Installer les dépendances de Composer
RUN composer install --no-interaction --optimize-autoloader

# Générer la clé de l'application Laravel
RUN php artisan key:generate

# Copier le script entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Définir le script entrypoint
ENTRYPOINT ["/entrypoint.sh"]
