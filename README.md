<h1 align="center">Mileapp Test</h1>

## Feature

- Clean code (DDD)
- Gin Framework
- Docker and docker-compose
- ORM with gorm
- Pub/Sub with kafka
- Integration testing
- Integration with github actions

## How to Build

Before run build the app

```bash
    # build with docker
    docker-compose build
```

## How to run

There are two ways to run this application, with docker or without docker

```bash
# running with docker

# copy .env
cp .env.example .env

# running in development mode, you can use live-reload when safe file
docker-compose up -d

# install composer if first time run
# access container app
docker exec -it app /bin/sh 
# run install package 
composer install --ignore-platform-reqs

# remove container
docker-compose down

```

```bash
# running in local/without docker

# copy .env
cp .env.example .env
composer install
php artisan serve
# note install mongodb and php-mongodb
# application will run in http://localhost:8000

```

## Run tests

```bash
php artisan test
```
## Swagger Documentation 

Swagger Documentation run in http://localhost/api/documentation
API Prefix run in http://localhost/api/v1/


## Stay in touch

* Author - [Syukri Husaibatul Khairi](https://www.linkedin.com/in/syukri-husaibatul-khairi-a6297314b/)

## License

golang-example is [MIT](LICENSE).
