#!/bin/bash

# Attente que MySQL soit prêt
until mysql -h db -u root -p${MYSQL_ROOT_PASSWORD} -e "SELECT 1"; do
  echo "En attente de la base de données..."
  sleep 2
done

# Création de la base de données si elle n'existe pas
mysql -h db -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE IF NOT EXISTS smartboard_db;"

# Lancer les migrations Laravel
php artisan migrate

# Lancer le serveur PHP-FPM
php-fpm
