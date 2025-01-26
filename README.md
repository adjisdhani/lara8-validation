# Laravel 8 Validation and Security

This repository demonstrates how to implement validation in Laravel 8 to prevent SQL Injection and XSS attacks.

## Steps to Set Up and Test

1. **Clone the Repository**
   ```bash
   git clone https://github.com/adjisdhani/lara8-validation
   ```

2. **Navigate into the Repository**
   ```bash
   cd lara8-validation
   ```

3. **Configure the `.env` File**
   - Set up your database connection details in the `.env` file.

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Run PHPUnit Tests**
   - Execute the test scripts to ensure SQL Injection and XSS prevention works as expected.
   ```bash
   php artisan test
   ```

6. **Locate PHPUnit Test Files**
   - You can find the test cases in the following folder:
     ```
     tests/Feature/BookTest.php
     ```

7. **Finish**
   - The setup and testing are complete.

## Testing Details

The test file `BookTest.php` includes scenarios to verify:
- SQL Injection prevention by validating input data.
- XSS attack prevention by treating input as plain text.

Feel free to contribute or use this implementation as a reference for your Laravel projects!
