#!/bin/bash

# Attente que MySQL soit prêt
until mysql -h db -u root -p${MYSQL_ROOT_PASSWORD} -e "SELECT 1"; do
  echo "En attente de la base de données..."
  sleep 2
done

# Suppression et recréation de la base de données
mysql -h db -u root -p${MYSQL_ROOT_PASSWORD} -e "DROP DATABASE IF EXISTS smartboard_db;"
mysql -h db -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE smartboard_db;"

# Migrations
php artisan migrate --force

# Seeds (ajout des données d'exemple)
php artisan db:seed --force

# Lancer le serveur PHP-FPM
php-fpm
