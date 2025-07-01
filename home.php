<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-10 max-w-md w-full text-center">
        <h1 class="text-2xl font-bold text-green-600 mb-4">Login successful</h1>
        <p class="text-gray-700">Welcome to your dashboard!</p>
        <a href="logout.php" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Log Out</a>
    </div>
</body>
</html>