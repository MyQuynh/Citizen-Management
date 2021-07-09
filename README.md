# Citizen-Management
Simple Web Citizens management with PHP connect to MySQL database through PDO 

### Installation

To begin, follow the instruction of install [PDO](https://www.php.net/manual/en/pdo.installation.php)

### Server

Next, execute the following command to start the built-in PHP server

```sh
$ php -S localhost:8000
```
You can change to what port as you want

### Fews things notice before starting

In the config.php file, You need to pass some required arguments to the PDO constructor method:

· Server location ('localhost' in the above example)

· Database name ('test' in the above example)

· Database username ('username' in the above example)

· User password ('password' in the above example)

### File structure

    .
    ├── employee.sql            # Execute to create database employee
    ├── index.php               # Front-end controller between pages
    ├── create.php              # Process create entity employee
    ├── delete.php              # Process delete entity employee
    ├── edit.php                # Process update entity employee
    └── config.php              # Connect to MySQL Database
