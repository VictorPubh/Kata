### Check the solutions (via unit test) following the steps below.
You need to have `Docker` and `docker-compose` installed on your machine, open the [documentation here](https://docs.docker.com/compose/install/).
#### 1 - Start Docker Image
Lift the container with the command:
```sh
docker-compose up
```
Add `-d` in front of the command to avoid crashing your terminal; Use `--force-recreate` if necessary.
#### 2 - Enter the terminal bash
To do this, list the containers that are active on your machine:
```sh
 docker ps -a
```
###### Find the ID of the container whose image name is __"php_apache"__.

If you have `grep` installed, use the command below to filter the results.
```sh
 docker ps -a | grep "php_apache"
```
#### 3 - Access your image bash
```sh
docker exec -i -t {{PHP_APACHE_ID}} bash
```
###### Superuser privilege may be required.

Replace {{PHP_APACHE_ID}} with the ID, for example:
```sh
sudo docker exec -i -t 44d3325aa220 bash
```

#### 4 - Run unit tests with Pest
```sh
./vendor/bin/pest
```
Developed and tested in version PHP 7.4.27.
