# Web and RESTful API

This is a sample project using laravel framework.This will include following

Web
-----
```
Routing
View
Controller
Model
Blade
Request
Redirect
Session
Error Handling
Encryption
File upload
Migration
Seeding
Pagination
Eloquent: Relationships(One To One, One To Many)
Authentication
Authorization
Validation
Middleware
Validation Request
```
RESTful API
-----------
```
crud
API Resource
Authentication with JSON Web Token(JWT)
```
### Installation

- git clone
- copy .env.example .env
- composer install
- config database
- php artisan migrate
- php artisan db:seed
- php artisan serve
- done

Postman
==========
http://localhost:8080/RESTful API/public/api/post 
http://localhost:8080/RESTful API/public/api/auth/login

jwt
----
php artisan make:controller AuthController

http://localhost:8080/RESTful API/public/api/auth/login


get=>http://localhost:8080/RESTful API/public/api/posts
post=>http://localhost:8080/RESTful API_JWT/public/api/auth/login