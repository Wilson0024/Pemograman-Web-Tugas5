# Web Programming Assignments 4

Welcome to my web programming assignments 4 repository!

![Banner](https://c.tenor.com/bCfpwMjfAi0AAAAC/tenor.gif)

## Personal Information
- **Name**: Wilson Angelie Tan
- **NPM**: 140810230024
- **Class**: B
- **University**: Universitas Padjadjaran
- **Department**: Informatics Engineering

---

## Project Description

This project demonstrates a **CRUD (Create, Read, Update, Delete)** application using **PHP** and **MySQL**. The application consists of three main components: **index.php**, **insert.php**, and **update.php**. It allows users to manage personal information by adding, viewing, and updating records.

### Features
- **index.php**: 
  - Displays a list of all records in a table format.
  - Provides options to add a new record or update existing ones.
  
- **insert.php**:
  - Contains an HTML form to input personal information such as:
    1. **NPM** (Student ID)
    2. **Name**
    3. **Address**
    4. **Date of Birth**
    5. **Gender** (Radio selection)
    6. **Email**
  - Processes the submitted data and stores it in the MySQL database.
  
- **update.php**:
  - Allows users to edit existing records.
  - Retrieves the record based on the provided NPM from the URL and pre-fills the form with existing data.
  - Updates the record in the database after the form is submitted.

### How It Works
1. **index.php**:
   - When the user navigates to this page, a list of records is displayed in a table.
   - Users can click a button to add a new record, which redirects them to **insert.php**.
   - Each record also includes an option to edit, redirecting the user to **update.php** with the selected NPM.

2. **insert.php**:
   - Users fill out a form with personal information.
   - Upon submission, the data is sent to the PHP script, which processes and inserts it into the database.
   - After successfully adding the record, users are redirected back to **index.php**.

3. **update.php**:
   - Retrieves the record to be updated based on the NPM passed via the URL.
   - The form is pre-filled with the existing data, allowing users to make changes.
   - After submitting the form, the updated data is processed and saved back to the database.

### Example Output

After inserting or updating records, the application provides feedback messages to inform the user of successful operations. 

```plaintext
Data berhasil ditambahkan! 
Data berhasil diupdate!
