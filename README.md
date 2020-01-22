# api-product-platform

## Prerequisites

- PHP >= 7.2
    - PHP extension `sqlite3` (required for `teamtnt/tntsearch`)
- Laravel 6
- MariaDB 10.3
- Node & NPM
- Composer
- [Laravel Requirements](https://laravel.com/docs/installation)

---

## Installation

__1. Install Laravel + Api product Platform__

```bash
# 1.0 Install Laravel
git clone https://github.com/john-dufrene-dev/api-product-platform.git

# 1.1 Edit your .env
cp .env.example .env

# 1.2 Install packages DEV
composer install && npm install && yarn prod

# 1.3 Generate a Laravel key
php artisan key:generate

# 1.4 Run the prototype Installer
php artisan api-product:init  # --production Only in production (In progress)

# 1.5 If you are in Production
composer install --optimize-autoloader --no-dev # Only in production

```

__2. Troubleshooting__

```bash

# 1.0 No Erros detects
- In progress

```

__3. TodoList__

```bash

- In progress

```

__4. Helpers__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");
- php artisan api-product:init

```

__5. Api__

```bash

# 1.0 Users authorizations
- jwt token

# 1.1 Get user token
- Get token access: In progress

# 1.2 Get api informations
- Get route of api: IN PROGRESS

```
 
