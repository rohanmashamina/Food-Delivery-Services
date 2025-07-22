# Food Delivery Services 🍽️

A PHP/MySQL-based web application for seamless food ordering and delivery, supporting customers, delivery personnel, restaurant managers, and administrators.

## 🚀 Features

- ✅ User Registration & Login (Customers, Delivery Boys, Restaurant Managers, Admin)
- 🍕 Restaurant and Food Menu Management
- 🛒 Cart System & Order Placement
- 💳 Payment Options (Cash on Delivery / Online)
- 🔄 Order Tracking and Status Updates
- 📦 Delivery Management Panel
- 📊 Admin Dashboard for Full Platform Control

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS (Bootstrap, FontAwesome), JavaScript (jQuery)
- **Backend**: PHP
- **Database**: MySQL (via `ffc.sql`)
- **Development Tools**: Windows PowerShell (for local development)

## 📂 Project Structure

```

root/
├── admin/
├── customer/
├── delivery/
├── manager/
├── includes/
├── uploads/
├── dbh.inc.php
├── index.php
└── ffc.sql

````

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/food-delivery-services.git
````

Or download the ZIP and extract it into your local machine.

### 2. Database Setup

* Import the `ffc.sql` file into your MySQL server using phpMyAdmin or CLI:

```sql
CREATE DATABASE food_delivery;
USE food_delivery;
-- Then import the SQL file
```

* Update the **database credentials** in `includes/dbh.inc.php`:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";
```

### 3. Configure Web Server

* Move the project folder to the web server's root directory (e.g., `htdocs/` in XAMPP).
* Ensure PHP and MySQL services are **running**.

### 4. Set File Permissions

* Ensure the `/uploads` directory has **write permissions** to allow image uploads.

### 5. Access the Application

Open your browser and go to:

```
http://localhost/food-delivery-services/index.php
```

## 👥 User Roles & Usage

### 👤 Customers

* Register/Login
* Browse restaurants & food items
* Add items to cart
* Place orders and track them
* Manage personal profile

### 🚚 Delivery Boys

* Login to dashboard
* View assigned orders
* Update delivery statuses (picked up, delivered)

### 🍽️ Restaurant Managers

* Manage menu items (add/edit/delete)
* View and update order statuses
* Monitor restaurant-specific performance

### 🛠️ Admin

* Manage restaurants, users, delivery boys
* Oversee all platform activities
* Access insights and reports

## 🤝 Contributing

We welcome contributions!

1. **Fork** this repository
2. Create your branch:
   `git checkout -b feature/YourFeature`
3. Commit your changes:
   `git commit -m "Add some feature"`
4. Push to the branch:
   `git push origin feature/YourFeature`
5. Open a **Pull Request**



