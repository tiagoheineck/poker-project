# After Clone

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

# Running into docker containers

```
vendor/bin/sail up -d --build
```

For more information see Laravel Sail Documentation [Here](https://laravel.com/docs/10.x/sail)