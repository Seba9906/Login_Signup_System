<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Basic Page</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">About</a></li>
            <li>
                <form action="logout.php" method="POST" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Welcome to the Basic Page</h1>
        <p>This is a simple HTML template for practicing logout functionality.</p>
    </div>

    <footer>
        <p>&copy; 2024 Sebastian Troncoso. All rights reserved.</p>
    </footer>
</body>
</html>
