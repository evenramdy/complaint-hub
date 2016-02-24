# complaint-hub
## Description
Just me testing laravel 5. This app is just a mockup with basic auth. Feel free to explore this :)
## Installation
1. Open your CLI (**Command Line Interface**)
2. Clone this repo, type in the CLI : 
```
git clone https://github.com/evenramdy/complaint-hub.git your-desired-folder-name
```
3. Move to newly created directory with :
```
cd your-app-folder-from-git-clone
```
4. Install php dependencies with (see [Composer](https://getcomposer.org/download/) if you haven't install composer on your system) :
```
composer install
```
5. Create your database (in this example i will create 'complaint_hub' database on mysql).
6. Move to application root folder, open '.env.example' file on your favorite editor, and save it as '.env'
7. Modify your '.env' file depending on your environment and database config. Sample of '.env' file :
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_HOST=localhost
DB_CONNECTION=mysql
DB_DATABASE=complaint_hub
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
8. Now go back to your CLI and generate app key with (it will update your APP_KEY value in '.env' file) :
```
php artisan key:generate
```
9. Migrate and seed your app with :
```
php artisan migrate
php artisan DB:seed
```
10. Serve your app with :
```
php artisan serve
```
11. Open up your browser and go to : 'localhost:8000'
12. Login with default credentials :
  * mail : administrator@mail.com
  * password : administrator