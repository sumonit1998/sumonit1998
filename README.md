To run this project please follow these steps :

Step 1: Go to project Directory . Composer install 

Step 2: Modify .env file with

DATABASE_URL="mysql://username:password@127.0.0.1:3306/db_name?serverVersion=8.0.32&charset=utf8mb4"

Step 3: Run these commands : 
```
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```
Step 4: Start symfony Server
```
symfony server:start
```
 
