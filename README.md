<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="450" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">Student Management CRUD System</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-v12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-%5E8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/Bootstrap-v5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap Version">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/license-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 📌 Project Overview

This is a complete, lightweight, and modern **Student Management CRUD System** built on **Laravel 12**, **PHP 8.2+**, and styled using **Bootstrap 5**. Designed with clean coding standards, it features full Create, Read, Update, and Delete operations, dynamic client/server-side searching, full pagination with persistent query parameters, robust request validation, and an elegant card-based shadow interface.

---

## ✨ Features

- 👤 **Complete CRUD Lifecycle**: Add, view, edit, and delete student records seamlessly.
- 🔍 **Dynamic Searching**: Search students instantaneously by name, email, or course.
- 📄 **Robust Pagination**: Integrated native Eloquent pagination (5 items per page) with query string preservation when changing pages.
- 🛡️ **Server-Side Validation**: Secure form submission with validation (e.g. required fields, email formatting, and unique database checks).
- 🎨 **Premium Modern UI**: Styled with modern CSS and Bootstrap 5 featuring card shadows, clean tables, rounded elements, interactive states, and beautiful status alerts.
- 🗄️ **MySQL Database Integration**: Powered by MySQL for managing persistent, reliable, and relational student records.

---

## 🛠️ Tech Stack & Architecture

### Backend & Core
- **Framework:** Laravel 12.x
- **Language:** PHP 8.2+
- **Database:** MySQL

### Frontend & Styling
- **CSS Framework:** Bootstrap v5.3 (Loaded via high-availability CDN)
- **Engine:** Blade Templating Engine

---

## 🚀 Installation & Local Setup

Get your development environment up and running in minutes by following these step-by-step instructions.

### Prerequisites
Make sure you have the following installed on your machine:
- **PHP** (>= 8.2)
- **Composer**
- **Node.js & NPM**

---

### Step-by-Step Guide

#### 1. Navigate to your Project Directory
```bash
cd laravel-student-record
```

#### 2. Install PHP Dependencies
Run Composer to install all backend dependencies:
```bash
composer install
```

#### 3. Environment Configuration
Duplicate the `.env.example` file to create your main environment file:
```bash
copy .env.example .env
```
*(On Linux/macOS, use `cp .env.example .env`)*

#### 4. Generate Application Key
Generate the unique secure application key:
```bash
php artisan key:generate
```

#### 5. Database Configuration & Setup

1. Create a MySQL database (for example, named `laravel`):
   ```sql
   CREATE DATABASE laravel;
   ```

2. Configure your MySQL credentials and database details in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=your_secure_password
   ```

#### 6. Run Database Migrations
Create the tables in your database:
```bash
php artisan migrate
```

#### 7. Install & Build Frontend Assets
If you have Vite/NPM assets configuration, set up and build:
```bash
npm install
npm run dev
```

#### 8. Serve the Application
Launch the Laravel local development server:
```bash
php artisan serve
```

The application will be accessible at: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 📁 Key Files & Directories

Here is a map of the important codebase files related to this CRUD feature:

* **Routes:**
  * [`routes/web.php`](file:///c:/Workspace/Laravel/laravel-student-record/routes/web.php) — Contains the student resource route mapping and homepage redirects.
* **Controllers:**
  * [`app/Http/Controllers/StudentController.php`](file:///c:/Workspace/Laravel/laravel-student-record/app/Http/Controllers/StudentController.php) — Processes search queries, stores, updates, and deletes students.
* **Models & Migrations:**
  * [`app/Models/Student.php`](file:///c:/Workspace/Laravel/laravel-student-record/app/Models/Student.php) — Student model with mass-assignment (`$fillable`) guards.
  * [`database/migrations/2026_05_24_081609_create_students_table.php`](file:///c:/Workspace/Laravel/laravel-student-record/database/migrations/2026_05_24_081609_create_students_table.php) — Core database schema definitions for the `students` table.
* **Views (Blade Templates):**
  * [`resources/views/layouts/app.blade.php`](file:///c:/Workspace/Laravel/laravel-student-record/resources/views/layouts/app.blade.php) — Main app wrapper, CDN includes, and session alerts.
  * [`resources/views/students/index.blade.php`](file:///c:/Workspace/Laravel/laravel-student-record/resources/views/students/index.blade.php) — Interactive data table, search input, and paginator.
  * [`resources/views/students/create.blade.php`](file:///c:/Workspace/Laravel/laravel-student-record/resources/views/students/create.blade.php) — Creation form with validated inputs.
  * [`resources/views/students/edit.blade.php`](file:///c:/Workspace/Laravel/laravel-student-record/resources/views/students/edit.blade.php) — Edit form populated with existing student records.

---

## ⚙️ REST API & Routes Resource Map

Below are the routes exposed by `Route::resource('students', StudentController::class)`:

| Verb      | URI                      | Action   | Route Name         | Description                                |
|-----------|--------------------------|----------|--------------------|--------------------------------------------|
| **GET**   | `/`                      | Redirect | -                  | Redirects directly to `/students`          |
| **GET**   | `/students`              | index    | `students.index`   | Displays student directory & search filter |
| **GET**   | `/students/create`       | create   | `students.create`  | Renders the form to add a student          |
| **POST**  | `/students`              | store    | `students.store`   | Valdates & creates a new student in DB     |
| **GET**   | `/students/{student}/edit`| edit     | `students.edit`    | Renders the form to edit existing record   |
| **PUT**   | `/students/{student}`    | update   | `students.update`  | Validates & updates student details        |
| **DELETE**| `/students/{student}`    | destroy  | `students.destroy` | Deletes the specified student              |

---

## 🧪 Running Tests

To verify that the application and environment run successfully, you can run tests with:
```bash
php artisan test
```

---

## 📄 License

This software is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute it.
