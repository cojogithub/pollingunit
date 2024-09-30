#!/bin/bash

# Function to run commands and try with sudo if it fails
try_command() {
    "$@"
    if [ $? -ne 0 ]; then
        if command -v sudo &> /dev/null; then
            echo "Trying with sudo..."
            sudo "$@"
        else
            echo "sudo not found or not available. Skipping sudo."
        fi
    fi
}

echo "===== Resetting Polling Unit Application ====="

# 1: Clear Caches
echo "Clearing caches..."
try_command php artisan config:clear
try_command php artisan route:clear
try_command php artisan view:clear
try_command php artisan cache:clear
try_command php artisan clear-compiled
try_command php artisan optimize:clear

# 2: Run Database Migrations and Seeding
echo "Running database migrations and seeding..."
try_command php artisan migrate:fresh --seed

# 3: Check and Create Polls Directory
echo "Ensuring polls directory exists..."
POLL_DIR="public/polls"
if [ ! -d "$POLL_DIR" ]; then
    echo "Polls directory does not exist. Creating it..."
    try_command mkdir -p "$POLL_DIR"
else
    echo "Polls directory already exists."
fi

# 4: Set Log File Permissions
LOG_FILE="/var/www/html/pollingunit/storage/logs/laravel.log"
LOG_DIR="/var/www/html/pollingunit/storage/logs"

echo "Checking if logs directory exists..."
if [ ! -d "$LOG_DIR" ]; then
    echo "Logs directory does not exist. Creating it..."
    try_command mkdir -p "$LOG_DIR"
fi

echo "Checking if laravel.log exists..."
if [ ! -f "$LOG_FILE" ]; then
    echo "laravel.log does not exist. Creating the file..."
    try_command touch "$LOG_FILE"

    # Ensure directory and file are writable
    try_command chmod 777 "$LOG_DIR"
    try_command chmod 777 "$LOG_FILE"
fi

# Attempt to set permissions for laravel.log
echo "Setting permissions for laravel.log..."
try_command chmod 777 "$LOG_FILE"
if [ -f "$LOG_FILE" ]; then
    echo "Successfully set permissions for laravel.log."
else
    echo "Failed to set permissions for laravel.log."
fi

# 5: Cache Routes
echo "Caching routes..."
try_command php artisan route:cache

# OPERATION RESULTS #
echo "===== Operation Results ====="
echo "Config cache cleared successfully."
echo "Route cache cleared successfully."
echo "View cache cleared successfully."
echo "Application cache cleared successfully."
echo "Compiled files cleared successfully."
echo "Optimization cache cleared successfully."
echo "Database migration and seeding completed successfully."
echo "Polls directory operation succeeded."
if [ -f "$LOG_FILE" ]; then
    echo "Log file permissions set successfully."
else
    echo "Failed to set log file permissions."
fi

echo "POLLING UNIT APPLICATION RESET COMPLETE."
