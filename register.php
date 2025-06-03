<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare - FullFridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php 
        session_start();
        include 'db_connect.php';
        include 'header.php'; 
    ?>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
            <h3 class="text-center mb-4">Creare cont nou</h3>
            <form action="insert_user.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nume utilizator</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="numar" class="form-label">Număr înmatriculare</label>
                    <input type="text" class="form-control" id="numar" name="numar" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Parolă</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Creează cont</button>
                </div>
            </form>
            <p class="text-center mt-3">
                Ai deja cont? <a href="login.php">Autentifică-te</a>
            </p>
        </div>
    </div>

    <footer class="text-center mt-5 mb-3 text-muted">
        &copy; 2024 FullFridge. Toate drepturile rezervate.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
