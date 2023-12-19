<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $filePath = 'users.json';
    $jsonData = file_get_contents($filePath);
    $users = json_decode($jsonData, true);
    if (!is_array($users) && !empty($jsonData)) {
        $users = [];
    }
    $userExists = false;
    $loggedIn=false;
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            $userExists = true;
            if (password_verify($password, $user['password'])) {
                $loggedIn=true;
                break;    
            } 
            else {
                echo "Wrong password. Please try again.";
            }

            break;
        }
    }

    if (!$userExists) {
        echo "User not found.";
    }
    if ($loggedIn){
        session_start();
        $_SESSION["username"]=$user['username'];
        header("location: home.php");
    }else{
        header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <div class="login-container">
        <div class="form-container">
            <form action="index.php" method="post">
                <h1>Login</h1>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="checkbox-container">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit">Login</button>
                <div class="additional-links">
                    <a href="signup.php">Don't have an account? Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
