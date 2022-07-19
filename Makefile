tests:
	docker-compose exec php-fpm composer install --no-interaction
	docker-compose exec php-fpm Tests/app/bin/console assets:install -v Tests/app
	docker-compose exec -w /var/www/html/Tests/app php-fpm npm i
	docker-compose exec -w /var/www/html/Tests/app php-fpm npm run build
	docker-compose exec php-fpm npm i
	docker-compose exec php-fpm npm run test:cypress-install
	docker-compose exec php-fpm npm run test