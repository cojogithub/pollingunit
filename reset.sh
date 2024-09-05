#!/bin/bash

# Initialize status flags
config_clear_success=false
route_clear_success=false
view_clear_success=false
cache_clear_success=false
clear_compiled_success=false
optimize_clear_success=false
database_reset_success=false
database_permission_success=false
polls_reset_success=false
migration_success=false
route_cache_success=false
log_permission_success=false

# Clear caches and compiled files
if sudo php artisan config:clear; then
    config_clear_success=true
fi

if sudo php artisan route:clear; then
    route_clear_success=true
fi

if sudo php artisan view:clear; then
    view_clear_success=true
fi

if sudo php artisan cache:clear; then
    cache_clear_success=true
fi

if sudo php artisan clear-compiled; then
    clear_compiled_success=true
fi

if sudo php artisan optimize:clear; then
    optimize_clear_success=true
fi

# Remove and recreate SQLite database
DB_PATH="/var/www/html/pollingunit/database/database.sqlite"
if sudo rm -f "$DB_PATH" && sudo touch "$DB_PATH"; then
    database_reset_success=true
    # Ensure the database directory and file permissions
    if sudo chown apache:apache /var/www/html/pollingunit/database && sudo chown apache:apache "$DB_PATH"; then
        if sudo chmod 755 /var/www/html/pollingunit/database && sudo chmod 644 "$DB_PATH"; then
            database_permission_success=true
        else
            database_permission_success=false
        fi
    else
        database_permission_success=false
    fi
fi

# Run migrations and seed the database
if sudo php artisan migrate:fresh --seed; then
    migration_success=true
fi

# Cache routes
if sudo php artisan route:cache; then
    route_cache_success=true
fi

# Check and create directories if needed
if [ -d /var/www/html/pollingunit/resources/views/public/polls ]; then
    echo "Polls directory already exists."
    polls_reset_success=true
else
    if sudo mkdir -p /var/www/html/pollingunit/resources/views/public/polls; then
        echo "Successfully created public/polls directory."
        polls_reset_success=true
    else
        echo "Failed to create public/polls directory."
        polls_reset_success=false
    fi
fi

# Ensure correct permissions for the laravel.log file
if sudo chmod 664 /var/www/html/pollingunit/storage/logs/laravel.log; then
    log_permission_success=true
    echo "Permissions for laravel.log set to 664 successfully."
else
    log_permission_success=false
    echo "Failed to set permissions for laravel.log."
fi

# Final success and failure messages
echo "===== Operation Results ====="

# Success Messages
if $config_clear_success; then
    echo "Config cache cleared successfully."
fi
if $route_clear_success; then
    echo "Route cache cleared successfully."
fi
if $view_clear_success; then
    echo "View cache cleared successfully."
fi
if $cache_clear_success; then
    echo "Application cache cleared successfully."
fi
if $clear_compiled_success; then
    echo "Compiled files cleared successfully."
fi
if $optimize_clear_success; then
    echo "Optimization cache cleared successfully."
fi
if $database_reset_success; then
    echo "Database has been reset successfully."
fi
if $database_permission_success; then
    echo "Database file permissions set to 755 (directory) and 644 (file) successfully."
fi
if $migration_success; then
    echo "Database migration and seeding completed successfully."
fi
if $route_cache_success; then
    echo "Routes have been cached successfully."
fi
if $polls_reset_success; then
    echo "Polls directory operation successful."
fi
if $log_permission_success; then
    echo "Log file permissions set successfully."
fi

# Failure Messages
if ! $config_clear_success; then
    echo "Failed to clear config cache."
fi
if ! $route_clear_success; then
    echo "Failed to clear route cache."
fi
if ! $view_clear_success; then
    echo "Failed to clear view cache."
fi
if ! $cache_clear_success; then
    echo "Failed to clear application cache."
fi
if ! $clear_compiled_success; then
    echo "Failed to clear compiled files."
fi
if ! $optimize_clear_success; then
    echo "Failed to clear optimization cache."
fi
if ! $database_reset_success; then
    echo "Database failed to reset successfully."
fi
if ! $database_permission_success; then
    echo "Failed to set database file permissions."
fi
if ! $migration_success; then
    echo "Database migration and seeding failed."
fi
if ! $route_cache_success; then
    echo "Failed to cache routes."
fi
if ! $polls_reset_success; then
    echo "Polls directory operation failed."
fi
if ! $log_permission_success; then
    echo "Failed to set log file permissions."
fi

# Final application status
if $config_clear_success && $route_clear_success && $view_clear_success && $cache_clear_success && $clear_compiled_success && $optimize_clear_success && $database_reset_success && $database_permission_success && $polls_reset_success && $migration_success && $route_cache_success && $log_permission_success; then
    echo "POLLING UNIT APPLICATION RESET SUCCESSFUL."
else
    echo "POLLING UNIT APPLICATION RESET FAILED."
fi

