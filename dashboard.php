<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - FullFridge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            text-align: center;
            padding-top: 50px;
        }

        .box {
            background: white;
            padding: 30px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        a.button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a.button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Bine ai venit, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
    <p>Ai acces la zona privată a aplicației FullFridge.</p>
    <a class="button" href="logout.php">Logout</a>
</div>

</body>
</html>
