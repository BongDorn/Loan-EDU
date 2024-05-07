<?php
// Start session
session_start();

// Include database connection
include 'db/db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();

    // Get result
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            // Redirect to dashboard or any other authenticated page
            header("Location: dashboard.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['login_error'] = "Incorrect username or password.";
            header("Location: login.php");
            exit();
        }
    } else {
        // User does not exist
        $_SESSION['login_error'] = "User does not exist.";
        header("Location: login.php");
        exit();
    }
} else {
    // Redirect to login page if form is not submitted
    header("Location: login.php");
    exit();
}
?>
