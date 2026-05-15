# Book Library API

REST API application for managing a book library built with Laravel.

---

## 🚀 Tech Stack

- PHP 8.2+
- Laravel (latest version)
- PostgreSQL
- Composer
- PHPUnit
- Swagger UI (OpenAPI)

---

## 📌 Features

- Create book (POST /api/books)
- Get all books (GET /api/books)
- Get single book (GET /api/books/{id})
- Update book (PATCH /api/books/{id})
- Delete book (DELETE /api/books/{id})

---

## 📦 Installation

### 1. Clone repository

```
git clone https://github.com/g-nik1ta/book-library.git
cd book-library
```


### 2. Install dependencies

```
composer install
```


### 3. Environment setup

```
cp .env.example .env
php artisan key:generate
```


### 4. Configure database

Update .env:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=book_library
DB_USERNAME=postgres
DB_PASSWORD=your_password
```


### 5. Run migrations

```
php artisan migrate
```


### 6. 🚀 Run project

```
php artisan serve
```

API available at:
http://127.0.0.1:8000/api

---

## 📖 Swagger UI

Swagger documentation is available at:
http://127.0.0.1:8000/docs

## 🧪 Running Tests
```
php artisan test
```

## 📊 Project Summary

This project demonstrates:

- RESTful API architecture
- Laravel FormRequest validation
- Database migrations and seeders
- PHPUnit feature testing
- Swagger API documentation