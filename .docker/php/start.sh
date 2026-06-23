#!/bin/sh

set -e

echo "Environment: $ENV"
echo "Starting PHP container ..."

if [ "$ENV" != "prod" ]; then
    if [ ! -f "/app/vendor/autoload.php" ]; then
        echo "Vendor dependencies not found"
        echo "Running composer install"
        composer install
    fi
fi

echo "Starting PHP-FPM ..."
exec "$@"
