PORT ?= 8000
start:
	php artisan serve --port=$(PORT)

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app

install:
	composer install

validate:
	composer validate

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-html build/logs/html

env:
	cp -n .env.example .env

key:
	php artisan key:generate

db:
	php artisan migrate:fresh --seed

frontend:
	npm ci && npm run build