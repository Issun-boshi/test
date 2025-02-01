# How to set up

## In WSL Ubuntu

```sh
docker build -f docker/Dockerfile -t symfony_test_image .;
docker run -dit -v /home/phil/Projects/symfony_test:/var/www/html --name symfony_test_container symfony_test_image bash;
docker exec -it symfony_test_container bash
```

## In container

```sh
cd /var/www/html;
git config --global user.name "Phil Michaels";
git config --global user.email philmichaels31@gmail.com;
symfony new app --version="7.0.*" --webapp;
exit
```

## In WSL Ubuntu

```sh
sudo chown -R phil /home/phil/Projects/symfony_test/app;
sudo chgrp -R phil /home/phil/Projects/symfony_test/app;
docker stop symfony_test_container;
docker rm symfony_test_container
```

# How to start

```sh
bash docker/start.sh
```

# How to stop

```sh
bash docker/stop.sh
```

# How to run symfony console

example:

```sh
docker exec -it symfony_test_container php /var/www/bin/console debug:router
```
