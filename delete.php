<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

include 'connect.php';

if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']);
    $sql = "DELETE FROM users WHERE user_id = $user_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: home.php");
        exit;
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    header("Location: home.php");
    exit;
}
?>