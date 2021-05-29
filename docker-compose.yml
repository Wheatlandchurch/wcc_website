version: '3.1'

services:

  wordpress:
    image: wordpress
    depends_on:
        - db
    restart: always
    ports:
      - 8000:80
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_USER: wordpress
      WORDPRESS_DB_PASSWORD: wordpress
      WORDPRESS_DB_NAME: wordpress
    volumes:
      - "./wcc_website:/var/www/html"
      - "./wp-content/fonts:/var/www/html/wp-content/fonts"
      - "./wp-content/uploads:/var/www/html/wp-content/uploads"

  db:
    image: mysql:5.7
    restart: always
    environment:
      MYSQL_DATABASE: wordpress
      MYSQL_USER: wordpress
      MYSQL_PASSWORD: wordpress
      MYSQL_ROOT_PASSWORD: 'somewordpress'
    volumes:
      - db:/var/lib/mysql
      - ./wcc_final.sql:/docker-entrypoint-initdb.d/init.sql

volumes:
  db:

