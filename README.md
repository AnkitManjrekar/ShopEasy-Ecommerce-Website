## ShopEasy E-commerce Website

## Description :
ShopEasy is a full-stack e-commerce website developed using PHP, MySQL, Bootstrap, CSS, HTML, and JavaScript. 
It provides users with a seamless shopping experience, including features such as product browsing, user authentication, shopping cart management, admin panel and checkout process.

## Technologies Used
- PHP
- MySQL
- JavaScript
- Bootstrap
- CSS
- HTML

## Usage
1. Register or log in to your account.
2. Browse products and add items to your shopping cart.
3. User can update and delete products added to cart.
4. Login for Admin Panel.
5. Admin can add, update and delete product.
6. Admin can view users details and delete users.

## Installation
1. Install XAMPP.
2. Clone the repository and paste it inside 'C:\xampp\htdocs'.
3. Create a database with name 'shopeasy in phpMyAdmin'.
4. Create a table 'admin' with cloumn (id int primary key auto_increment, username varchar(100), password varchar(100)) and admin details inside it.
5. Create a table 'product_details' with cloumn (id int primary key auto_increment, pName varchar(100), pPrice varchar(100), pImage varchar(100), pCategory varchar(100)).
6. Create a table 'user' with cloumn (id int primary key auto_increment, userName varchar(100), userPhone varchar(100), userEmail varchar(100), userPass varchar(100)).
7. Start the Apache and MySql in XAMPP.
8. Open Browser and type 'localhost/ecommerce/shopeasy/user/index.php'
