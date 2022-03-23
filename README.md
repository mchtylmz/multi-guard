# Project

```bash
docker-compose build
docker-compose up -d

docker-compose run --rm app composer install

docker-compose run --rm app php artisan migrate:fresh --seed
```
