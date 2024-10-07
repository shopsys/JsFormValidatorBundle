install:
	docker compose exec php composer install --no-interaction
	docker compose exec php Tests/app/bin/console assets:install -v Tests/app
	docker compose exec -w /var/www/html/Tests/app php npm i
	docker compose exec -w /var/www/html/Tests/app php npm run build
	docker compose exec php npm i
	docker compose exec php npm run test:cypress-install

tests:
	docker compose exec php npm run test
