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

COPY *.php /var/www/html/
COPY .htaccess /var/www/html/
COPY web.config /var/www/html/
COPY wp-admin/ /var/www/html/wp-admin/
COPY wp-includes/ /var/www/html/wp-includes/
RUN rm -rf /var/www/html/wp-content
RUN chown www-data:www-data *
