<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>HEADER</header>
    <main>
        <section class="login-box">
            <h2>Login</h2>
            <form method="post" action="ceklogin.php">
                <label>Username</label>
                <input type="text" name="username" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <input type="submit" value="Login">
            </form>
        </section>
    </main>
    <footer>FOOTER</footer>
</body>
</html>