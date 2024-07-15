# Laravel Blog with Jetstream

![GitHub](https://img.shields.io/github/license/your-username/group-chat-api)
![PHP](https://img.shields.io/badge/PHP-%3E%207.4-blue)
![Slim](https://img.shields.io/badge/Slim%204-red)
![SQLite](https://img.shields.io/badge/SQLite3-green)

## Overview

A Modular blog with admin and client panels.

## Prerequisites

Before getting started with this API server, ensure that you have the following prerequisites installed on your system:

- **PHP**: Version >= 8.0.0
- **Laravel Framework > 7**
- **MySQL**

## Installation

### 1. Clone the Repository

```shell
git clone https://github.com/parhamcz/Slim-simple-group-chat.git
```
### 2. Change Direction to the cloned repo

```shell
cd /Laravel-Blog
```
### 3. Install Dependencies
***You have to install the laravel dependencies, and then install the jetstream dependencies.
```shell
composer install
npm install
```
### 4. Configure .ENV
***You can configure the .env file accourdingly to your decision or just simply copy the .env.example and configure it.**
```shell
cp .env.example .env
```
### 5. Run the migrations
***You can run migrations with the test data that i've put in repository.**
```shell
php artisan migrate --seed
```
### 6. Start the server
***After starting the server your good to go!***
```shell
php artisan serve
```
## Installation

### Usage
You can login and test the application as you want.
### Endpoints
Endpoints can be found in 'routes' folder located in Modules/*/.
### Acknowledgments
**Laravel Framework**
**MySQL**
