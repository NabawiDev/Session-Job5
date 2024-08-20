<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Ambil username dari sesi
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RendraImut</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
        }
        .container {
    display: grid;
    place-items: center; /* Center both horizontally and vertically */
    height: 100vh;       /* Adjust as needed */
    background-color: #f0f0f0; /* Optional: for better visibility */
}

img {
    max-width: 40%;
    max-height: 40%;
}
        .home-container {
            text-align: center;
            padding: 50px;
        }
        .home-container h1 {
            margin-bottom: 20px;
        }
        .home-container p {
            font-size: 18px;
            margin: 10px 0;
        }
        .home-container a {
            text-decoration: none;
            color: #007bff;
        }
        .home-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="home-container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>This is the imut page.</p>
        <a href="logout.php">Logout</a>
        <div class="input-group">
                <a href="index.php" >Home</a> <br>
                <a href="kalku.php" >Kalkulator</a> <br>
                <a href="rendra.php" >Si imut</a>
            </div>
            <div class="container">
        <img src="rendra.jpeg" alt="Si Imut Rendra">
    </div>
    </div>
</body>
</html>
