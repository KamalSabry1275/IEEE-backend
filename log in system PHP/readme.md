# Login System

this project is made as project task for
IEEE-Backend Zagazig-studentbranch

## Description

This is a login system created using PHP, HTML, CSS, some JavaScript, and PostgreSQL. It includes features for creating a new account, logging in, and accessing a product control system. The project has simple responsive design suitable for all screens .

## File Structure

The file structure of the login system is as follows:

- LOG IN SYSTEM
  - classes
    - dbh.classes.php
    - login.classes.php
    - loginController.classes.php
    - product.classes.php
    - productController.classes.php
    - signup.classes.php
    - signupController.classes.php
  - includes
    - productAdd.inc.php
    - productDelete.inc.php
    - productSHOW.inc.php
    - login.inc.php
    - logout.inc.php
    - signup.inc.php
    - productEdit.inc.php
  - sql
    - database.sql
  - aside.php
  - footer.php
  - style.css
  - syles.app.css
  - productAdd.php
  - productDelete.php
  - productShow.php
  - index.php
  - home.php
  - signup.php
  - productEdit.php

## Security

The login system includes several security measures to protect user information:

- User passwords are hashed before being stored in the database.
- The username must be unique for each user.
- The system uses an OOP with MVC model to ensure secure and organized code.
- The code is regularly reviewed and updated to address any security vulnerabilities.

## Getting Started

### Dependencies

- Describe any prerequisites, libraries, OS version, etc., needed before installing program.
- ex. Windows 10

### Installing

To install the login system, follow these steps:

1. Clone the project repository to your local machine.
2. Create a new PostgreSQL database and table(s) for storing user information.
3. Update the database connection settings in the dbh.php file located in the includes folder.
4. Host the project on a local or remote server.

## Authors

Eng:kamal sabry
