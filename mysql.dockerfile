FROM mysql:latest
COPY . /var/www
WORKDIR /var/www
ENV MYSQL_ROOT_PASSWORD=asd
EXPOSE 3001