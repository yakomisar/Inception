USER=jmacmill

all:
	@mkdir -p /home/${USER}/data/db
	@mkdir -p /home/${USER}/data/wp
	docker-compose -f srcs/docker-compose.yml build
	docker-compose -f srcs/docker-compose.yml up -d

up:
	docker-compose -f srcs/docker-compose.yml up -d

rm_folders:
	rm -rf /home/${USER}/data/db
	rm -rf /home/${USER}/data/wp

down:
	${rm_folders}
	docker-compose -f srcs/docker-compose.yml down

ps:
	docker-compose -f srcs/docker-compose.yml ps