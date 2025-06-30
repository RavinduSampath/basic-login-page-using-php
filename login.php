
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-gray-100">
    <div class="login">
    <div class="container mt-16">
        <h3 class="text-xl font-bold mb-6 text-center">Login</h3>
        <form action="register.php" method="POST">
            <table class="w-full">
                <tr>
                    <td class="py-2 pr-3">
                        <label for="username" class="font-medium">Username:</label>
                    </td>
                    <td class="py-2">
                        <input type="text" name="username" id="username" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600" />
                    </td>
                </tr>
                <tr>
                    <td class="py-2 pr-3">
                        <label for="password" class="font-medium">Password:</label>
                    </td>
                    <td class="py-2">
                        <input type="password" name="password" id="password" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="pt-4 text-center">
                        <button type="submit" name="login" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Login</button>
                    </td>
                    
                </tr>
            </table>
        </form>
        <h3>Did not have an account?
            <a href="index.php" class="text-blue-600 hover:underline">Sign Up</a>
        </h3>
    </div>
    </div>
</body>

</html>