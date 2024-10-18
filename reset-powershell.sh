# Function to run commands and retry if they fail
function Try-Command {
    param (
        [string]$Command
    )

    Invoke-Expression $Command
    if ($LASTEXITCODE -ne 0) {
        Write-Output "Command failed: $Command"
    }
}

Write-Output "===== Resetting Polling Unit Application ====="

# 1: Clear Caches
Write-Output "Clearing caches..."
Try-Command "php artisan config:clear"
Try-Command "php artisan route:clear"
Try-Command "php artisan view:clear"
Try-Command "php artisan cache:clear"
Try-Command "php artisan clear-compiled"
Try-Command "php artisan optimize:clear"

# 2: Run Database Migrations and Seeding
Write-Output "Running database migrations and seeding..."
Try-Command "php artisan migrate:fresh --seed"

# 3: Check and Create Polls Directory
Write-Output "Ensuring polls directory exists..."
$pollDir = "public\polls"
if (-not (Test-Path $pollDir)) {
    Write-Output "Polls directory does not exist. Creating it..."
    Try-Command "New-Item -Path $pollDir -ItemType Directory"
} else {
    Write-Output "Polls directory already exists."
}

# 4: Set Log File Permissions
$logFile = "C:\path\to\your\project\storage\logs\laravel.log"
$logDir = "C:\path\to\your\project\storage\logs"

Write-Output "Checking if logs directory exists..."
if (-not (Test-Path $logDir)) {
    Write-Output "Logs directory does not exist. Creating it..."
    Try-Command "New-Item -Path $logDir -ItemType Directory"
}

Write-Output "Checking if laravel.log exists..."
if (-not (Test-Path $logFile)) {
    Write-Output "laravel.log does not exist. Creating the file..."
    Try-Command "New-Item -Path $logFile -ItemType File"

    # Ensure directory and file are writable (on Windows, files and directories are writable by default for the user creating them)
}

# Attempt to set permissions for laravel.log (on Windows, permissions are usually managed via file properties)
Write-Output "Setting permissions for laravel.log..."
# Note: Windows does not use chmod; permissions are managed through the file properties dialog or `icacls`
# You can set permissions using `icacls` if needed, for example:
# Try-Command "icacls $logFile /grant Everyone:(F)"

# 5: Cache Routes
Write-Output "Caching routes..."
Try-Command "php artisan route:cache"

# OPERATION RESULTS #
Write-Output "===== Operation Results ====="
Write-Output "Config cache cleared successfully."
Write-Output "Route cache cleared successfully."
Write-Output "View cache cleared successfully."
Write-Output "Application cache cleared successfully."
Write-Output "Compiled files cleared successfully."
Write-Output "Optimization cache cleared successfully."
Write-Output "Database migration and seeding completed successfully."
Write-Output "Polls directory operation succeeded."
if (Test-Path $logFile) {
    Write-Output "Log file created successfully."
} else {
    Write-Output "Failed to create log file."
}

Write-Output "POLLING UNIT APPLICATION RESET COMPLETE."
