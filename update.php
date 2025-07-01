<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
include 'connect.php';

if (!isset($_GET['id'])) {
    header('Location: home.php');
    exit;
}

$user_id = intval($_GET['id']);

// Fetch user data
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $conn->query($sql);
if (!$result || $result->num_rows == 0) {
    echo "User not found.";
    exit;
}
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $update = "UPDATE users SET username='$username', email='$email' WHERE user_id=$user_id";
    if ($conn->query($update) === TRUE) {
        header('Location: home.php');
        exit;
    } else {
        echo "Update failed: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Update User</h2>
        <form method="POST">
            <label class="block mb-2">Username:
                <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" class="w-full px-3 py-2 border rounded" required>
            </label>
            <label class="block mb-2">Email:
                <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" class="w-full px-3 py-2 border rounded" required>
            </label>
            
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 mt-4">Update</button>
            <a href="home.php" class="ml-4 text-blue-600 hover:underline">Cancel</a>
        </form>
    </div>
</body>
</html>