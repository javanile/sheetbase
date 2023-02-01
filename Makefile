
build:
	@docker-compose build

install: build
	@docker-compose run --rm gemstone composer install

update: build
	@docker-compose run --rm gemstone composer update

require: build
	@docker-compose run --rm sheetbase composer require phpmyadmin/sql-parser

start:
	@docker-compose up -d
	@echo "Open this page <http://localhost:8080>"

release:
	@git add .
	@git commit -am "Release updates"
	@git push

## ====
## Test
## ====

test-create-database:
	@bash tests/bare/create-database-test.sh