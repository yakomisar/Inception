CREATE DATABASE wordpress_db;
CREATE USER 'jmacmill'@'%' IDENTIFIED BY 'strongparol';
GRANT ALL PRIVILEGES ON wordpress_db.* TO 'jmacmill'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY 'newstrongparol';