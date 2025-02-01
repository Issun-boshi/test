#!/bin/bash

docker run -dit -p 8000:8000 -v /home/phil/Projects/symfony_test:/var/www/html --name symfony_test_container symfony_test_image;
# docker exec -dit symfony_test_container php -S 0.0.0.0:8080 -t /var/www/public
#docker exec -dit symfony_test_container symfony server:start

#docker run -dit -p 8080:8080 -v /home/phil/Projects/symfony_test/app:/var/www --name symfony_test_container symfony_test_image;
#docker exec -dit symfony_test_container /usr/sbin/php-fpm --nodaemonize
#docker exec -dit symfony_test_container /usr/sbin/httpd -DFOREGROUND
