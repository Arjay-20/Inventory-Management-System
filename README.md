<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <b>Inventory Management System — Midterm Project</b><br>
  Built using Laravel Framework (PHP), MySQL, Blade Templates, and Bootstrap
</p>

<p align="center">
  <a href="#"><img src="https://img.shields.io/badge/Status-Completed-brightgreen"></a>
  <a href="#"><img src="https://img.shields.io/badge/Laravel-11.x-red"></a>
  <a href="#"><img src="https://img.shields.io/badge/License-MIT-yellow"></a>
</p>

---

## 📘 About the Project

This project is part of our **Midterm Examination** for the subject *Web Systems and Technologies*.  
It is a **Laravel-based Inventory Management System** designed to demonstrate CRUD functionality (Create, Read, Update, Delete) using Laravel’s MVC structure and Eloquent ORM.

The system allows users to manage inventory records such as product name, quantity, and price — with data stored in a MySQL database.

---

## 🎯 Objectives

- Demonstrate Laravel MVC architecture and routing.
- Implement CRUD operations using Eloquent ORM.
- Apply Blade templates for a responsive and dynamic UI.
- Use Laravel Artisan commands for setup and migrations.
- Practice Git and GitHub for collaboration and documentation.

---

## ⚙️ Features

- 🟢 **Add Items** – Add new inventory records.  
- 🟡 **Edit Items** – Update existing products.  
- 🔴 **Delete Items** – Remove products from the database.  
- 🔍 **View Inventory** – Display all records dynamically.  
- 💾 **Database Integration** – Data stored and managed via MySQL.  
- 🧑‍💻 **Blade UI** – Clean and reusable HTML templating using Blade.

---

## 🧩 Technologies Used

| Technology | Description |
|-------------|-------------|
| **Laravel 11** | PHP Framework for MVC structure |
| **PHP 8.x** | Backend scripting |
| **MySQL** | Relational database for data storage |
| **Blade** | Laravel’s templating engine |
| **Bootstrap 5** | Frontend styling and layout |
| **Composer** | PHP dependency manager |

---

## 👥 Contributors
| Name | Role | GitHub Branch |
|------|------|----------------|
| A. Patacsil | Developer / Documentation | APatacsil-Main |
| C. Cabanela | Partner / Repository Owner | CCabanela-Main |

## 🧭 Usage
- Open the system in your browser after running `php artisan serve`.  
- Click **“Add Item”** to create a new product entry.  
- Use **“Edit”** to modify details of an existing item.  
- Use **“Delete”** to remove an item from the inventory list.  
- All updates automatically reflect in the MySQL database.  
- Navigate between pages using the Laravel routes and Blade templates.

## 🖼️ Screenshots / Code Snippets
- this is from a controller
    namespace App\Http\Controllers;

    use App\Models\Category;
    use Illuminate\Http\Request;
- this is from the database
        '''<?php
                use Illuminate\Database\Migrations\Migration;
                use Illuminate\Database\Schema\Blueprint;
                use Illuminate\Support\Facades\Schema;
                return new class extends Migration
                {
                    /**
                    * Run the migrations.
                    */
                    public function up(): void
                    {
                        Schema::create('products', function (Blueprint $table) {
                            $table->id();
                            $table->string('product_name', 150);
                            $table->decimal('price', 10, 2);
                            $table->integer('stock');
                            $table->foreignId('category_id')->constrained()->onDelete('cascade');
                            $table->timestamps();
                        });
                    }
                    /**
                    * Reverse the migrations.
                    */
                    public function down(): void
                    {
                        Schema::dropIfExists('products');
                    }
                };
- this is from the blades or vews
        '''<!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>My Inventory</title>
                <link rel="stylesheet" href="{{ asset('css/app.css') }}">
                </head>
                <body>
                <h1>MyInventory</h1>
                    <nav>
                        <a href="{{ route('products.index') }}">Products</a>
                        <a href="{{ route('categories.index') }}">Categories</a>
                    </nav>
                    <hr>
                    @yield('content')
                </body>
                </html>

- this is from my routes
            ---<?php

            use App\Http\Controllers\CategoryController;
            use App\Http\Controllers\ProductController;

            Route::get('/', function () {
                return redirect()->route('products.index');
            });

            Route::resource('categories', CategoryController::class);
            Route::resource('products', ProductController::class);


class CategoryController extends Controller

## 🧰 Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/CarlAgustine/CCabanela-APatacsil.git
