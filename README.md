# PHP Database Connection Check

This repository contains scripts to check database connectivity using both MySQLi and PDO methods in PHP. This project aims to help developers validate their database connection configurations on local or production environments. The scripts require minimal setup, and this guide outlines all the prerequisites and steps for running them.

## Prerequisites

1. **PHP**: Ensure you have PHP installed. Version 5.3 or higher is required, as the scripts utilize MySQLi and PDO.
   - Check your PHP version:
     ```bash
     php -v
     ```
   - If PHP is not installed, you can install it using the following command:
     ```bash
     sudo apt install php
     ```

2. **MySQL/MariaDB**: Ensure MySQL or MariaDB is installed and running. 
   - Check if MySQL is installed:
     ```bash
     mysql --version
     ```
   - If MySQL is not installed, you can install it using the following command:
     ```bash
     sudo apt install mysql-server
     ```

3. **XAMPP/LAMPP** (optional): If you are using XAMPP or LAMPP for development purposes, ensure it's properly set up and running on your system.

4. **PDO and MySQLi extensions**: Make sure PHP is configured with `pdo_mysql` and `mysqli` extensions enabled.
   - Verify extensions are installed:
     ```bash
     php -m | grep -E 'pdo_mysql|mysqli'
     ```
   - If not installed, you can enable them in your PHP configuration or install with:
     ```bash
     sudo apt install php-mysql
     ```

5. **Database Configuration**: Ensure you have a MySQL database set up and note down the credentials such as database name, username, password, and host.

## Setup

### 1. Clone the Repository

Clone this repository to your local environment using Git:

```bash
git clone https://github.com/Lalatenduswain/PHP-DB-CONNECTION-CHECK.git
```

Navigate to the cloned directory:

```bash
cd PHP-DB-CONNECTION-CHECK
```

### 2. Configure the Scripts

Before running the scripts, you need to update the database credentials in both `mysqli_connection.php` and `pdo_connection.php` scripts.

- **`mysqli_connection.php`**
  ```php
  $db = new mysqli('localhost', 'root', 'YourStrongPassword', 'YourDB_Name');
  ```

- **`pdo_connection.php`**
  ```php
  $database = 'YourDBName';
  $username = 'root';
  $password = 'YourStrongPassword~!@996969';
  ```

Replace `'YourDB_Name'` and `'YourStrongPassword'` with your actual database name and password.

### 3. Running the Scripts

You can execute these scripts by navigating to their directories via your browser or terminal.

- If you are using XAMPP/LAMPP, place the scripts in the `htdocs` folder, and access them like this:
  ```
  http://localhost/PHP-DB-CONNECTION-CHECK/mysqli_connection.php
  http://localhost/PHP-DB-CONNECTION-CHECK/pdo_connection.php
  ```

- Alternatively, use the PHP built-in server to run the scripts:
  ```bash
  php -S localhost:8000
  ```

## Disclaimer | Running the Script

**Author:** Lalatendu Swain | [GitHub](https://github.com/Lalatenduswain) | [Website](https://blog.lalatendu.info/)

This script is provided as-is and may require modifications or updates based on your specific environment and requirements. Use it at your own risk. The authors of the script are not liable for any damages or issues caused by its usage.

## Donations

If you find this script useful and want to show your appreciation, you can donate via [Buy Me a Coffee](https://www.buymeacoffee.com/lalatendu.swain).

## Support or Contact

Encountering issues? Don't hesitate to submit an issue on our [GitHub page](https://github.com/Lalatenduswain/PHP-DB-CONNECTION-CHECK/issues).
