<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
    <div class="container" id="signup">
        <h1 class="text-2xl font-bold mb-6 text-center">Sign Up</h1>
        <form action="register.php" method="POST">
            <table class="w-full">
                <tr>
                    <td class="py-2 pr-3">
                        <label for="username" class="font-medium">Username:</label>
                    </td>
                    <td class="py-2">
                        <input type="text" id="username" name="username" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                    </td>
                </tr>
                <tr>
                    <td class="py-2 pr-3">
                        <label for="email" class="font-medium">Email:</label>
                    </td>
                    <td class="py-2">
                        <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                    </td>
                </tr>
                <tr>
                    <td class="py-2 pr-3">
                        <label for="password" class="font-medium">Password:</label>
                    </td>
                    <td class="py-2">
                        <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-600">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="pt-4 text-center">
                        <button type="submit" name="signup" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Sign Up</button>
                    </td>
                </tr>
            </table>
        </form>
        <h3>Already have an account?
            <a href="login.php" class="text-blue-600 hover:underline">Login</a>
        </h3>
    </div>
</body>
</html>