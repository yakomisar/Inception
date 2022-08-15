CREATE DATABASE wordpress;
CREATE USER 'jmacmill'@'%' IDENTIFIED BY 'strongparol';
GRANT ALL PRIVILEGES ON wordpress.* TO 'jmacmill'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'superstrongparol';
