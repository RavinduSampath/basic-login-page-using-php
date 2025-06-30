<?php
include 'connect.php';
if (isset($_POST['signup'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if username already exists
    $checkQuery = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists. Please choose a different one.";
    } else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            
            header("location: login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
if (isset($_POST["login"])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
        $_SESSION['loggedin'] = true;
        header("location:home.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>