<?php
session_start();

$users = [
    "admin" => "pass@admiN1",
    "anita" => "pass@anitA2",
    "sapta" => "pass@saptA3",
    "musawwir" => "pass@musaD4"
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = strtolower(trim($_POST['username'] ?? ''));
    $password = trim($_POST['password'] ?? '');

    if (array_key_exists($username, $users)) {

        if ($users[$username] === $password) {
            $_SESSION['username'] = ucfirst($username);
            $_SESSION['login'] = true;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Password yang dimasukkan salah'); window.location='login.php';</script>";
            exit();
        }

    } else {
        echo "<script>alert('Username tidak terdaftar'); window.location='login.php';</script>";
        exit();
    }

} else {
    header("Location: login.php");
    exit();
}
?>
