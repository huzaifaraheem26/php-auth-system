# TODO List for PHP Sign-Up/Login Application

- [x] Create signup.php: HTML form with 5 input fields (full_name, email, username, password, confirm_password), PHP logic to validate inputs, hash password using password_hash(), and append user data to users.txt in JSON format.
- [x] Create login.php: HTML form for email and password, PHP to read users.txt, verify credentials using password_verify(), start session with user data, and redirect to dashboard.php on success.
- [x] Create dashboard.php: Check if user is logged in via session, display welcome message with user info; else redirect to login.php.
- [x] Create users.txt: Initialize empty text file for storing user data.
- [x] Create style.css: CSS for clean, centered forms and pages (white background, blue accents, responsive layout).
- [x] Test the application: Run local PHP server (php -S localhost:8000) and verify sign-up, login, and dashboard functionality.
- [x] Enhance dashboard.php: Add profile section, recent activities, navigation menu.
- [x] Update style.css: Improve layout with flexbox, better colors, responsiveness for professional look.
