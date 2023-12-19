<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confpassword = $_POST["confirm-password"];

    if ($password != $confpassword || empty($password)) {
        echo "Passwords must match";
        exit();
    }

    $filePath = 'users.json';
    if (!file_exists($filePath) || !is_readable($filePath)) {
        echo "Error: Unable to read user data or file doesn't exist!";
        exit();
    }

    $jsonData = file_get_contents($filePath);


    if ($jsonData === false) {
        echo "Error: Unable to read user data or file is empty!";
        exit();
    }

    $users = json_decode($jsonData, true);

    if ($users === null && !empty($jsonData)) {
        $users = [];
    }

    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "Username already exists. Please choose a different one.";
            exit();
        }
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $newUser = [
        'username' => $username,
        'password' => $hashedPassword
    ];

    $users[] = $newUser;
    $newJsonData = json_encode($users, JSON_PRETTY_PRINT);

    if (file_put_contents($filePath, $newJsonData) === false) {
        echo "Error: Unable to write user data.";
        exit();
    }

    echo "Registration successful! You can now login!";
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <div class="login-container">
        <form action="signup.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="confirm-password" required>
            <button type="submit">Sign Up</button>
            <div class="additional-links">
                <a href="index.php">Already have an account? Login</a>
            </div>
        </form>
    </div>
</body>
</html>
