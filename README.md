<h1 style = color:blue;text-align:center;font-size:24;font-family:cursive;>Task Forge 🎮</h1>

This is a simple Task App built with Laravel. It allows users to manage tasks by performing basic CRUD (Create, Read, Update, Delete) operations.

Features
Create new tasks
View individual tasks
Update existing tasks
Delete tasks
Installation
Clone the repository:

```
git clone github.com/ManU4kym/TaskForge

```
Install dependencies:
```
composer install
```
Navigate to the repository
```
cd task-app

```
cp .env.example .env
Generate an application key:
```
php artisan key:generate

Configure your database connection in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sampledb
DB_USERNAME=root
DB_PASSWORD=''
Run database migrations to create tables:
```
php artisan migrate
Serve the application:
```
php artisan serve
Access the application in your web browser at http://localhost:8000.


Navigate to the homepage to view a list of tasks.
Click on a task to view its details.
Use the "Create Task" button to add a new task.
Use the "Edit" and "Delete" buttons to update or remove tasks.
Contributing
Contributions are welcome! If you have any suggestions, improvements, or feature requests, please open an issue or create a pull request.

License
This project is open-source and available under the MIT License.
