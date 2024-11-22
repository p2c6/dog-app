# Clone Repository
Go to your terminal and clone the repository:
```sh
git clone https://github.com/p2c6/dog-app.git
```

After cloning the repository,go to the **dog-app** directory:

```sh
cd dog-app
```

Once you're in the **dog-app** directory, install all backend dependencies.

```sh
composer install
```

Also, install frontend dependencies.

```sh
npm install
```

After installing dependencies, set-up your env.

## Setup

After opening the project directory, duplicate the .env.example located in your tallstack-post-app root:

```sh
cp .env.example .env
```

After duplication .env, uncomment variables, and update database name which you prefer (default as **dog_app**) and your database connection (I used MySQL). Make sure **initial database exists** on your database administrator like **phpMyAdmin**.

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dog_app
DB_USERNAME=root
DB_PASSWORD=
```


After setting up **.env**, run the migration and the seeder:

```sh
php artisan migrate:fresh --seed
```

Create your app key with the command:

```sh
php artisan key:generate
```

Run the server on your first terminal with the command:
 
```sh
php artisan serve
```

And the frontend on your second terminal with the command:
 
```sh
npm run dev
```

After all the set-up, you can check the application which runs on **http://localhost:8000**

## Note

If you encounter problem, try clearing the cache, etc., 

```sh
php artisan optimize:clear
```

Then run the server again:

```sh
php artisan serve
```

## Example user

email: jdoe@test.com

password: password







