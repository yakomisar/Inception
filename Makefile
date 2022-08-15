all: start

start:
	@mkdir -p /home/${USER}/data/db
	@mkdir -p /home/${USER}/data/wp
	docker-compose -f srcs/docker-compose.yml up -d

stop:
	docker-compose -f srcs/docker-compose.yml down

ps:
	docker-compose -f srcs/docker-compose.yml ps

rm_folders:
	sudo rm -rf /home/${USER}/data/db
	sudo rm -rf /home/${USER}/data/wp

fclean:	stop rm_folders
		@docker rmi -f $$(docker images -aq)
		docker volume rm $$(docker volume ls -q)
		docker system prune -a --force

re:
		@mkdir -p /home/${USER}/data/db
		@mkdir -p /home/${USER}/data/wp
		@docker-compose -f srcs/docker-compose.yml build
		docker-compose -f srcs/docker-compose.yml up