
## Instructions

### Requirements
- PHP 8
- Composer
- PostgreSQL

### Getting started

1. Install dependencies:
```shell
composer install
```

2. Make a new configuration file:
```shell
cp .env.example .env
```
3. Generate encryption key:

```shell
php artisan key:generate
```

4. Edit `.env` file to set your database credentials.

5. Execute database migrations and run "seeding" by using `--seed` option:

```shell
php artisan migrate --seed
```

