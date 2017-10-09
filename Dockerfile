FROM drupal:7-fpm
COPY . /var/www/html/
# must need volume
VOLUME /var/www/html