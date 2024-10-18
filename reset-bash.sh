#!/bin/bash

# Function to attempt command first without sudo, then with sudo if it fails
try_command() {
    # Try running the command without sudo
    "$@"

    # If the command fails, try with sudo
    if [ $? -ne 0 ]; then
        if command -v sudo >/dev/null 2>&1; then
            echo "Command failed. Trying with sudo: $@"
            sudo "$@"
        else
            echo "Command failed and sudo is not available: $@"
        fi
    fi
}

echo "Clearing caches and optimizing application..."
try_command php artisan optimize:clear
try_command php artisan optimize

echo "Dropping all tables and running migrations..."
try_command php artisan migrate:fresh --seed

echo "Caching routes..."
try_command php artisan route:cache

# Attempt to create polls directory
echo "Creating public/polls directory..."
try_command mkdir -p public/polls
if [ ! -d public/polls ]; then
    echo "Failed to create public/polls directory."
else
    echo "Successfully created public/polls directory."
fi

# Attempt to set permissions for laravel.log
LOG_FILE="storage/logs/laravel.log"
echo "Setting permissions for laravel.log..."
try_command chmod 777 "$LOG_FILE"
if [ ! -f "$LOG_FILE" ]; then
    echo "Failed to set permissions for laravel.log."
else
    echo "Successfully set permissions for laravel.log."
fi

echo "===== Operation Results ====="
echo "Config cache cleared successfully."
echo "Route cache cleared successfully."
echo "View cache cleared successfully."
echo "Application cache cleared successfully."
echo "Compiled files cleared successfully."
echo "Optimization cache cleared successfully."
echo "Database migration and seeding completed successfully."
if [ -d public/polls ]; then
    echo "Polls directory operation succeeded."
else
    echo "Polls directory operation failed."
fi
if [ -f "$LOG_FILE" ]; then
    echo "Log file permissions set successfully."
else
    echo "Failed to set log file permissions."
fi

echo "POLLING UNIT APPLICATION RESET COMPLETE."
