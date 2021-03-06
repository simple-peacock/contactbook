## Contact Book

### [Live Demo](http://contactbook.peterplucinski.com)


### Notes & Features
- Frontend: Angular JS & Materialize CSS framework
- Backend: Lumen micro framework (based on Laravel 5)
- RESTful architecture
- Backend acts as an API only, frontend (Angular) calls the api
- API endpoint `/api/contacts` (returns JSON)
- Frontend has it's own routing using angular, single page application idea
- Validation happens on the frontend and backend


### Installation

1. Clone this repository
2. Configure webserver with root set to the public directory inside this project
3. Create a database
3. Do a composer install/update inside the project root to install lumen framework
4. Add write privileges to directories inside the storage directory
5. Create a .env inside project root (example below)
6. Do a `php artisan migrate` inside project root to setup the database table
7. Optionally `php artisan db:seed` to load sample data


#### .env example
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomKey!!!

APP_LOCALE=en
APP_FALLBACK_LOCALE=en

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=contactbook
DB_USERNAME=user
DB_PASSWORD=password

CACHE_DRIVER=memcached
SESSION_DRIVER=memcached
QUEUE_DRIVER=database
```


