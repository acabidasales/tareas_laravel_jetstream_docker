#!/bin/bash

# Instalar dependencias de Node.js
npm i
composer install --ignore-platform-reqs
# Iniciar Vite
npm run dev -- --host