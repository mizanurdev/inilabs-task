# Laravel To-Do CRUD Project

This is a simple To-Do CRUD application built with the Laravel framework. It allows users to create, update, and delete to-do tasks, and mark them as completed. 

## Author of this project
- Md. Mizanur Rahman
- mizancse2018@gmail.com

## Features
- Add new to-do items
- Edit existing to-do items
- Delete to-do items
- Mark tasks as completed

## Requirements
Before running this project, make sure you have the following installed:
- PHP (version 8.x or above)
- Composer
- MySQL or any other supported database
- A web server (e.g., Apache, Nginx)

## Steps to Run the Project

### 1. Clone or Download the Project
If you are downloading the project as a zip file, extract it to your desired folder.

If you are cloning the project from GitHub, run:
```bash
git clone https://github.com/mizanurdev/inilabs-task
```
Then cd into the folder with this command-
```
cd task-5
```
Then do a composer install

```
composer install
```

Then create a environment file using this command-

```
cp .env.example .env
```
### 2. Database Configure and setup
Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `task5` and then do a database migration using this command-

```
php artisan migrate
```


At last generate application key, which will be used for password hashing, session and cookie encryption etc.

```
php artisan key:generate
```
Then create fake data in data table use `db:seed` command-

```
php artisan db:seed
```

### 3. Run server

Run server using this command-

```
php artisan serve
```

Then go to project output from your browser and see the app.

```
http://localhost:8000
```