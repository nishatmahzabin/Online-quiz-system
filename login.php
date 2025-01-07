<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login credentials
    $correctUsername = "user";
    $correctPassword = "password123";

    if ($username == $correctUsername && $password == $correctPassword) {
        echo "Login successful!";
        // Redirect to quiz page after successful login (you can modify this behavior)
        header("Location: quiz.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>
