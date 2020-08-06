<h1 align="center">Mileapp Test - Backend</h1>

## Feature

- Create Package 
- Store Package 
- Update Package 
- Patch Package 
- Delete Package 
- Get Package 
- Get All Package 
- MongoDB
- Swagger Documentation  
- Testing  
- Docker  






## How to build

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

# running in development mode
docker-compose up -d
```
first time run? install composer 

```bash
# access container app
docker exec -it app /bin/sh 
# run install package 
composer install --ignore-platform-reqs
```

## How to stop

```bash
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
## Application 

- Swagger Documentation run in http://localhost/api/documentation
- API Prefix run in http://localhost/api/v1/
- Greetings run in http://localhost


## Insomnia JSON

- "./insomnia-export.json"


## Stay in touch

* Author - [Syukri Husaibatul Khairi](https://www.linkedin.com/in/syukri-husaibatul-khairi-a6297314b/)

## License

golang-example is [MIT](LICENSE).
