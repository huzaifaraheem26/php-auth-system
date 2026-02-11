# PHP Signup & Login System (JSON Text File Based)

A simple authentication system built using PHP.  
This project includes **Signup, Login, Dashboard, and Logout** functionality.

User data is stored in a text file (`users.txt`) using **JSON format**.

## Features

### User Signup
- Full Name
- Email
- Username
- Password
- Confirm Password Validation

### Security & Validation
- Server-side form validation
- Secure password hashing using `password_hash()`
- Password confirmation check
- Data stored in JSON format

### Authentication System
- Login with email or username
- Session-based dashboard access
- Logout functionality with session destroy

## How It Works

1. User fills out the signup form.
2. Form validation checks required fields and password match.
3. Password is securely hashed using `password_hash()`.
4. User data is encoded into JSON format.
5. Data is appended to `users.txt`.
6. User logs in using registered credentials.
7. If credentials match, a session is created.
8. User is redirected to the dashboard.
9. Logout destroys the session and redirects to login page.

## Technologies Used

- PHP
- HTML5
- CSS3
- File Handling
- JSON Encoding
- Sessions
- `password_hash()` for security

## Security Note

This project uses `password_hash()` for secure password storage.

Text file storage is used for **learning purposes only**.  
In real-world applications, a database system such as **MySQL or PostgreSQL** is recommended.


