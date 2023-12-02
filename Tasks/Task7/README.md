# Configuring MySQL

## Install

```bash
sudo apt install mysql-server
sudo su
mysqld --initialize
exit
```

## Change root password

```
sudo su
mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123';
exit
exit
```

## Add user (can also be done in HeidiSQL)

```
sudo su
mysql -p123
CREATE USER 'admin'@'%' IDENTIFIED BY '123';
GRANT SELECT, INSERT, UPDATE ON task7.* TO 'admin'@'%';
exit
exit
```
