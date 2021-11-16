FROM mysql:latest
COPY . /var/www
WORKDIR /var/www
ENTRYPOINT php artisan serve
EXPOSE 3002