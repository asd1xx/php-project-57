### Hexlet tests and linter status:
[![Actions Status](https://github.com/asd1xx/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/asd1xx/php-project-57/actions)
[![asd1xx-check](https://github.com/asd1xx/php-project-57/actions/workflows/asd1xx-check.yml/badge.svg)](https://github.com/asd1xx/php-project-57/actions/workflows/asd1xx-check.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/2f1a6e459c15a32887a9/maintainability)](https://codeclimate.com/github/asd1xx/php-project-57/maintainability)

# Task Manager

## About the project

A task management system similar to to [Redmine](https://www.redmine.org/).  
It allows you to set tasks, assign performers and change their statuses. To work with the system, registration and authentication are required.

## System requirements

- Composer 2.6.6
- PHP 8.3
- Laravel 10.10
- PostgreSQL 12.22

## Installation instructions

Perform the following steps in sequence:

1. Clone the repository:
    
    ```bash
    git@github.com:asd1xx/php-project-57.git task-manager
    ```

2. Go to the project directory:
    
    ```bash
    cd task-manager
    ```

3. Prepare .env file:
    
    ```bash
    make env
    ```

4. Installing dependencies:
    
    ```bash
    make install
    ```

5. Generating the application secret key:
    
    ```bash
    make key
    ```

6. Prepare the database:
    
    ```bash
    make db
    ```

7. Make frontend:
    
    ```bash
    make frontend
    ```

8. Start a project:
    
    ```bash
    make start
    ```

9. Open in browser:
    
    ```bash
    http://localhost:8000
    ```
