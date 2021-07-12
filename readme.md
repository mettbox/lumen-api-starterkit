# Lumen API Starterkit

> Lumen based API boilerplate

## Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Node](https://nodejs.org/en/) or [nvm](https://github.com/nvm-sh/nvm)

## Setup

### API

```
cd api/
cp .env.example .env
```

and change your db credentials:

### Getting started

Run Docker Container:

```sh
docker-compose up -d
```

Open PHP Shell:

```sh
docker exec -it apibase_fpm sh
```

Run scripts:

```sh
composer install
php artisan migrate
php artisan key:generate
php artisan jwt:secret
```

Open http://localhost

## API Routes

http://localhost/api/register
http://localhost/api/login
http://localhost/api/users/me
http://localhost/api/cards

## Add new API module

1. Create new module in `/api/modules/`
2. Register your module in `/api/bootstrap/app.php`

## Misc

Delete all containers using the following command: 

```sh
docker rm -f $(docker ps -a -q)
```
