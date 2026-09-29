# CRUD Application with PHP and MySQL

A simple PHP-based **CRUD (Create, Read, Update, Delete)** application that connects to a MySQL database to manage user data.

## 📁 Repository Structure

The repository includes the following essential core files and directories from the local `C:\xampp\htdocs\crud` environment:

```text
crud/
├── Screenshots/          # Folder containing application visual demonstrations
├── connect.php           # Establishes the connection to the MySQL database
├── crud.sql              # Exported database table structure and initial data
├── delete.php            # Processes data removal requests
├── display.php           # Retrieves and displays stored database records
├── update.php            # Handles data modification and editing flows
└── user.php              # Manages user-specific interactions or creation forms
```

---

## 🛠️ Installation & Setup Instructions

To run this application locally, you must have an environment like [XAMPP](https://www.apachefriends.org/) installed on your machine.

### 1. Place the Project Files
Clone or download this repository and place the `crud` folder into your local XAMPP web server directory:
`C:\xampp\htdocs\crud`

### 2. Import the Database Table
1. Start **Apache** and **MySQL** from your XAMPP Control Panel.
2. Open your web browser and navigate to [phpMyAdmin Localhost](http://localhost/phpmyadmin).
3. Select your target database (or create a new database).
4. Click on the **Import** tab at the top menu bar.
5. Click **Choose File** and select the **`crud.sql`** file included in this repository.
6. Scroll down and click **Import** (or **Go**).

### 3. Configure Database Connection
Open `connect.php` in your code editor and verify that the database credentials match your local configuration environment:
```php
$hostname = "localhost";
$username = "root";       // Default XAMPP username
$password = "";           // Default XAMPP password is empty
$database = "your_db";    // Replace with your actual database name
```

### 4. Run the Project
Open your web browser and go to the following address to test the application interface:
[http://localhost/crud/display.php](http://localhost/crud/display.php)

---

## 🚀 Main Functionalities
* **Create (`user.php`):** Form interface to collect input details and insert them dynamically into the database records.
* **Read (`display.php`):** Dynamically populates and renders an organized HTML table containing all current database entries.
* **Update (`update.php`):** Pre-fills existing entity criteria within a form to modify and save record variations safely.
* **Delete (`delete.php`):** Handles unique record targeting to securely remove elements from active storage.
