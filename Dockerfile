# Stage 1: Build Frontend Assets
FROM node:20-alpine AS asset-builder
WORKDIR /app
COPY package*.json ./
COPY postcss.config.js ./
COPY tailwind.config.js ./
COPY vite.config.js ./
COPY resources/ ./resources/
RUN npm install
RUN npm run build

# Stage 2: PHP & Apache Application Server
FROM php:8.2-apache

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set Apache Document Root to public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
WORKDIR /var/www/html
COPY . .

# Copy built frontend assets from builder stage
COPY --from=asset-builder /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Adjust permissions for Laravel storage & bootstrap cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copy start script
COPY docker/startup.sh /usr/local/bin/startup.sh
RUN chmod +x /usr/local/bin/startup.sh

# Expose port and set entrypoint
EXPOSE 80
ENTRYPOINT ["/usr/local/bin/startup.sh"]
