#!/bin/sh

# Set fallback environment variables if not provided
if [ -z "$APP_ENV" ]; then
    export APP_ENV=production
fi

if [ -z "$APP_DEBUG" ]; then
    export APP_DEBUG=false
fi

# Create a default .env file if it doesn't exist (helpful for key generation)
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generate Laravel Application Key if it's empty
if ! grep -q "APP_KEY=base64:" .env; then
    echo "Generating Laravel Application Key..."
    php artisan key:generate --force
fi

# Cache configurations for maximum speed in production
echo "Caching Laravel configuration, routes, and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run Apache in the foreground
echo "Starting Apache Web Server..."
exec apache2-foreground
