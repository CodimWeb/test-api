up: docker-up
down: docker-down

docker-up:
	docker-compose up -d
	docker-compose run --rm php composer install
	docker-compose run php php artisan migrate

#	docker-compose run --rm node npm install
#	docker-compose run --rm node npm run build

docker-down:
	docker-compose down
