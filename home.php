<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
include 'connect.php';
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

<body>
    <div class="max-w-4xl mx-auto mt-10 p-6 custom-table-container">
        <table class="w-full border">
            <tr>
                <th class="border px-2 py-1">userid</th>
                <th class="border px-2 py-1">username</th>
                <th class="border px-2 py-1">email</th>
                <th class="border px-2 py-1">log time</th>
                <th class="border px-2 py-1">IP Address</th>
                <th class="border px-2 py-1">Action</th>
            </tr>
            <?php
            $sql = "SELECT user_id, username, email, log_time, IP_Address FROM users";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td class='border px-2 py-1'>{$row['user_id']}</td>
                        <td class='border px-2 py-1'>{$row['username']}</td>
                        <td class='border px-2 py-1'>{$row['email']}</td>
                        <td class='border px-2 py-1'>{$row['log_time']}</td>
                        <td class='border px-2 py-1'>{$row['IP_Address']}</td>
                        <td class='border px-2 py-1'>
                        <input type='button' value='delete' class='bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600' onclick=\"if(confirm('Are you sure you want to delete this user?')) { window.location.href='delete.php?id={$row['user_id']}'; }\">
                        <input type='button' value='update' class='bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600' onclick=\"if(confirm('Are you sure you want to update this user?')) { window.location.href='update.php?id={$row['user_id']}'; }\">
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No users found.</td></tr>";
            }
            ?>
        </table>
        <a href="logout.php" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Log Out</a>
    </div>
</body>
</html>