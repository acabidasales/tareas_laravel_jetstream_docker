#!/bin/bash

# Ejecutar servidor de desarrollo de Laravel
composer install --ignore-platform-reqs

php artisan serve --host=0.0.0.0