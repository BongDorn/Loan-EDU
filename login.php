
<?php
// Include the header
include 'includes/header.php';
?>

<div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</div>

<?php
// Include the footer
include 'includes/footer.php';
?>

