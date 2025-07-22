Food Delivery Services
A PHP/MySQL web app for ordering food online, supporting customers, delivery boys, restaurant managers, and admin.

Features
User registration/login
Restaurant and food management
Cart, order, and payment (online/COD)
Order tracking
Admin dashboard
Technologies Used
PHP (backend)
MySQL (database, see ffc.sql)
HTML, CSS (Bootstrap, FontAwesome)
JavaScript (jQuery)
Windows PowerShell (for local development)
Setup Instructions
Clone the repository
Download or clone the project to your local machine.

Database Setup

Import ffc.sql into your MySQL server to create the required tables.
Update database credentials in dbh.inc.php as needed.
Configure Web Server

Place the project folder in your web server's root directory (e.g., htdocs for XAMPP).
Ensure PHP and MySQL are installed and running.
File Permissions

Make sure the uploads directory is writable for image uploads.
Access the Application

Open index.php in your browser to start using the platform.
Usage
Customers: Register, browse restaurants and food, add items to cart, place orders, track orders, and manage profile.
Delivery Boys: Login, view assigned orders, update delivery status.
Restaurant Managers: Manage food items, view orders, update order status.
Admin: Manage restaurants, delivery boys, and oversee platform operations.
Contributing
Fork the repository
Create your feature branch (git checkout -b feature/YourFeature)
Commit your changes
Push to the branch (git push origin feature/YourFeature)
Open a pull request
