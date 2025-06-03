<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="2;url=login.php">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="text-center">
    <h3 class="text-primary">Ai fost delogat cu succes.</h3>
    <p class="text-muted">Vei fi redirecționat către pagina de autentificare...</p>
  </div>
</body>
</html>
