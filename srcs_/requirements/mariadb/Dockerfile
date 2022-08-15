FROM debian:buster

# Install the server
RUN apt update && apt-get -y install mariadb-server

# Tells docker to listen to the following port
EXPOSE 3306

# Copy necessary files to container
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/crdb.sql && rm -f /var/www/crdb.sql

# Infinite loop
CMD /usr/bin/mysqld_safe