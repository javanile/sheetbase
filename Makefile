
build:
	@docker-compose build

install: build
	@docker-compose run --rm sheetbase composer install

update: build
	@docker-compose run --rm sheetbase composer update

require: build
	@docker-compose run --rm sheetbase composer require phpmyadmin/sql-parser

dump-autoload:
	@docker-compose run --rm sheetbase composer dump-autoload

start:
	@docker-compose up -d
	@echo "Open this page <http://localhost:8080>"

fix:
	@sudo chmod 777 -R var/cache

release:
	@git add .
	@git commit -am "Release updates"
	@git push

## ====
## Test
## ====

test-create-database:
	@bash tests/bare/create-database-test.sh