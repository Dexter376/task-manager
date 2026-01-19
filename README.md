# 🛡️ task-manager - Simple Task Management Made Easy

[![Download Task Manager](https://img.shields.io/badge/Download-Task%20Manager-blue)](https://github.com/Dexter376/task-manager/releases)

---

## 🚀 Getting Started

This guide will help you download and run the PostgreSQL Task Manager application. You will learn how to set this up smoothly. 

### Requirements

Before you begin, ensure your computer meets these requirements:

- **Operating System:** Windows, MacOS, or Linux
- **PostgreSQL:** Version 16 or later installed on your machine
- **PHP:** Version 8.1 or later
- **Composer:** Downloaded and set up

---

## 📥 Download & Install

1. **Visit the Releases Page**  
   Go to the [Releases Page](https://github.com/Dexter376/task-manager/releases) to download the application.

2. **Choose the Latest Version**  
   Find the latest release on the page. Click on it to view available files.

3. **Download the Files**  
   Look for the file named “task-manager.zip” or similar. Click the link to download it to your computer.

4. **Extract the Zip File**  
   Locate the downloaded zip file in your downloads folder. Right-click on it and choose “Extract All” to unzip it.

5. **Open a Command Prompt or Terminal**  
   Navigate to the location where you extracted the files. You can do this by opening Command Prompt or Terminal.

6. **Install Dependencies**  
   Run the following command to install the necessary packages:
   ```bash
   composer install
   ```

7. **Set Up the Environment**  
   Rename the `.env.example` file to `.env`. Open this file in a text editor. Update the database credentials as needed:
   - `DB_CONNECTION=pgsql`
   - `DB_HOST=127.0.0.1`
   - `DB_PORT=5432`
   - `DB_DATABASE=your_database_name`
   - `DB_USERNAME=your_username`
   - `DB_PASSWORD=your_password`

8. **Create the Database**  
   Open your PostgreSQL client. Create a new database that matches the name you entered in the `.env` file.

9. **Run Migrations**  
   Back in the command prompt or terminal, execute:
   ```bash
   php artisan migrate
   ```

10. **Start the Application**  
    Finally, run the following command to start the server:
    ```bash
    php artisan serve
    ```
    The application will be available at `http://127.0.0.1:8000`.

---

## 📊 Features

- **Task Management:** Create, update, and delete tasks effortlessly.
- **User Authentication:** Secure login for users.
- **RESTful API:** Easily connects with other applications.
- **Data Integrity:** Utilizes PostgreSQL for reliable data handling.

---

## 🌐 API Documentation

To learn how to use the API, refer to the API documentation once the server is running. You can access it by visiting `http://127.0.0.1:8000/api/documentation`.

---

## 📚 Support and Contribution

If you need help or have questions, visit our [issues page](https://github.com/Dexter376/task-manager/issues). For contributions, feel free to create a pull request after reviewing our contribution guidelines.

---

## 📦 Additional Information

This application is designed for users who want a straightforward task management solution. With a simple interface and reliable backend, you can manage your tasks with ease.

If you want to see how the frontend connects to this backend, check out the [Frontend Repository Here](https://github.com/arivanismail-05/task-client-task-manager).

For any further queries or suggestions, please open an issue on GitHub. Thank you for using our Task Manager application!

[![Download Task Manager](https://img.shields.io/badge/Download-Task%20Manager-blue)](https://github.com/Dexter376/task-manager/releases)