# PHP TEST
#### CONTENT: You need a web system to manage your work named “TodoList” with the below functions:

1. Functions to Add, Edit, Delete Work. A work includes information of “Work Name”, “Starting Date”, “Ending Date” and “Status” (Planning, Doing, Complete)
2. Function to show the works on a calendar view with: Date, Week, Month (can use third-party library)

### Env
- PHP: 7.4
- MariaDB: 10.4

### Installation

- Download as `.zip` or clone this repo using
  ```
  git clone https://github.com/ptnbk2401/todo_list.git
  ```
- Import the `data/todo_list.sql` file to phpMyAdmin

- If the URL is not http://localhost/todo_list, please update the `URLROOT` value at file `inc/constant.php`
    ```php
    <?php
    // URL Root
    define('URLROOT', 'http://localhost/todo_list');
  ```
- Config DB `connection.php`
    ```php
    ...
    $dsn = 'mysql:dbname=todo_list;host=127.0.0.1';
    $user = 'root';
    $password = '';
    ...
    ```
- Start your Apache server and go to http://localhost/todo_list

### Project structure
```
todo_list/
    assets/
        css/                # Compiled css file
        js/                 # Compiled javascript file
    controllers/            # Controller classes
    models/                 # Model classes
    views/                  # Views
    services/               # Services classes
    data/                   # SQL database file
    inc/                    # Define const
    .gitignore              # Files/folders to be ignored by version control
    index.php               # Starting point for the entire app
    connection.php          # connection db
    routes.php              # routes
```
