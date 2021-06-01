# WordPress Dockerfile: Create container from official WordPress image, basic customizations.
# docker build -t wordpress_local:wp_custom_1.0 .

FROM wordpress:latest

# APT Update/Upgrade, then install packages we need
RUN apt update && \
    apt upgrade -y && \
    apt autoremove && \
    apt install -y \
    vim \
    wget 

# Replace php.ini
# COPY php.ini /usr/local/etc/php
COPY * /var/www/html/*
COPY wp-admin/ /var/www/html/wp-admin/
COPY wp-content /var/www/html/wp-content/
COPY wp-includes/ /var/www/html/wp-includes/
