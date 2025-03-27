# baboltecommerce

eCommerce Website (PHP)

This is a PHP-based eCommerce website. It allows users to browse and purchase products, manage their accounts, and perform various tasks like password reset, registration, and more.
Table of Contents

    Project Overview

    Features

    Technologies Used

    Installation

    Usage

    Contributing

    License

    Contact

Project Overview

This project is a fully functional eCommerce website built using PHP. It includes a variety of features to support a smooth shopping experience, such as product listings, a shopping cart, order management, and more.
Features

    User Registration & Login: Allows users to create an account, log in, and manage their profiles.

    Product Catalog: Display products with their images, descriptions, and prices.

    Shopping Cart: Users can add products to the cart and proceed to checkout.

    Order Management: Allows users to view their past orders and order status.

    Payment Integration: Integrated with PayPal and Stripe for secure online payments.

    Admin Panel: Admins can manage products, orders, users, and website settings.

    Password Reset: Users can reset their passwords via email.

    Contact Form: Allows users to get in touch with support via email.

Technologies Used

    PHP: Server-side scripting language.

    MySQL: Database to store user and product information.

    HTML5, CSS3, JavaScript: Frontend technologies.

    Bootstrap: CSS framework for responsive design.

    PayPal API: Payment gateway for processing payments.

    Stripe API: Payment gateway for processing payments.

Installation
Prerequisites

Make sure you have the following installed:

    PHP (version 7.4 or higher)

    MySQL

    Apache or Nginx web server

    Composer (optional but recommended for managing dependencies)

Steps to Install

    Clone this repository:

    git clone https://github.com/yourusername/ecommerce-website.git
    cd ecommerce-website

    Set up your MySQL database:

        Create a new database.

        Import the database.sql file found in the project root to set up the required tables.

    Configure the database connection:

        Open config.php and enter your database credentials.

    Set up environment variables (optional):

        You may want to configure API keys for PayPal, Stripe, etc.

    Start your web server:

        If you're using Apache, make sure the .htaccess file is in place.

        For Nginx, you will need to adjust the server configuration to point to the index.php file.

    Visit the website in your browser at http://localhost/your-project-folder.

Usage

    Admin Panel: The admin panel allows you to manage users, products, orders, and website settings. You can access it by logging in with admin credentials (set in the admin_credentials.php file).

    Front-end: As a user, you can browse products, add them to your cart, and complete orders.

Contributing

    Fork the repository.

    Create a new branch (git checkout -b feature-branch).

    Make your changes.

    Commit your changes (git commit -m 'Add new feature').

    Push to the branch (git push origin feature-branch).

    Open a pull request to merge your changes.

License

This project is licensed under the MIT License - see the LICENSE file for details.
Contact

For any questions or issues, feel free to contact me:

    GitHub: github.com/babolt
    

