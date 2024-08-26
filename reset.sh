#!/bin/bash

# Initialize status flags
config_clear_success=false
route_clear_success=false
view_clear_success=false
cache_clear_success=false
clear_compiled_success=false
optimize_clear_success=false
database_reset_success=false
polls_reset_success=false
migration_success=false
route_cache_success=false

# Clear caches and compiled files
if php artisan config:clear; then
    config_clear_success=true
fi

if php artisan route:clear; then
    route_clear_success=true
fi

if php artisan view:clear; then
    view_clear_success=true
fi

if php artisan cache:clear; then
    cache_clear_success=true
fi

if php artisan clear-compiled; then
    clear_compiled_success=true
fi

if php artisan optimize:clear; then
    optimize_clear_success=true
fi

# Remove and recreate SQLite database
if rm database/database.sqlite && touch database/database.sqlite; then
    database_reset_success=true
fi

# Run migrations and seed the database
if php artisan migrate:fresh --seed; then
    migration_success=true
fi

# Cache routes
if php artisan route:cache; then
    route_cache_success=true
fi

# Remove and recreate the polls directory with correct permissions
if rm -rf resources/views/public/polls && mkdir -m 755 resources/views/public/polls; then
    polls_reset_success=true
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
if $migration_success; then
    echo "Database migration and seeding completed successfully."
fi
if $route_cache_success; then
    echo "Routes have been cached successfully."
fi
if $polls_reset_success; then
    echo "Polls directory has been reset successfully."
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
if ! $migration_success; then
    echo "Database migration and seeding failed."
fi
if ! $route_cache_success; then
    echo "Failed to cache routes."
fi
if ! $polls_reset_success; then
    echo "Polls directory failed to reset successfully."
fi

# Final application status
if $config_clear_success && $route_clear_success && $view_clear_success && $cache_clear_success && $clear_compiled_success && $optimize_clear_success && $database_reset_success && $polls_reset_success && $migration_success && $route_cache_success; then
    echo "POLLING UNIT APPLICATION RESET SUCCESSFUL."
else
    echo "POLLING UNIT APPLICATION RESET FAILED."
fi
