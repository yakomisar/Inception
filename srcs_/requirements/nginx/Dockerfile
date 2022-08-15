FROM debian:buster

RUN apt update && \
	apt install -y nginx openssl \
		nano curl net-tools

COPY tools/* /tmp/

EXPOSE 443

COPY ./conf/* /etc/nginx/sites-enabled/default
COPY ./tools/* /var/www

CMD bash /var/www/start.sh
