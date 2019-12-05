build:
	@docker-compose build --no-cache

run:
	@mkdir -p htdocs
	@docker network create web
	@docker-compose up -d
	@docker-sync stop && docker-sync clean && docker-sync start

stop:
	@docker-compose stop
	@docker-sync stop

clean:
	@docker-sync stop
	@docker-compose stop
	@rm -fR ./htdocs

get-app-logs:
	@docker logs -f app