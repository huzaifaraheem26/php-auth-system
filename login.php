<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $errors = [];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }
    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    if (empty($errors)) {
        $file = 'users.txt';
        $user_found = false;
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $user = json_decode($line, true);
                if ($user['email'] === $email && password_verify($password, $user['password'])) {
                    $user_found = true;
                    $_SESSION['user'] = [
                        'full_name' => $user['full_name'],
                        'email' => $user['email'],
                        'username' => $user['username']
                    ];
                    header('Location: dashboard.php');
                    exit;
                }
            }
        }
        if (!$user_found) {
            $errors[] = 'Invalid email or password.';
        }
    }
}

// Check for success message from signup
$success = isset($_GET['success']) ? 'Account created successfully. Please log in.' : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
</body>
</html>
