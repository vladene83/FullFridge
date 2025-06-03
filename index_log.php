<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullFridge | Comunitatea șoferilor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include 'header.php'; ?>

    <div class="container py-5">
        <h2 class="mb-4">Salut, <?php echo htmlspecialchars($_SESSION['username']); ?>! 👋</h2>

        <section class="mb-5">
            <h4 class="mb-3">Trending &ndash; Discuții între șoferi</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/post1.jpg" class="card-img-top" alt="post1">
                        <div class="card-body">
                            <h5 class="card-title">Cea mai bună aplicație de navigație?</h5>
                            <p class="card-text">Waze, Google Maps sau altceva? Iată ce spun colegii din trafic.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Vezi discuția</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/post2.jpg" class="card-img-top" alt="post2">
                        <div class="card-body">
                            <h5 class="card-title">Unde alimentați mai ieftin?</h5>
                            <p class="card-text">Zonele cu prețuri bune pentru motorină și benzină.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Vezi recomandări</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/post3.jpg" class="card-img-top" alt="post3">
                        <div class="card-body">
                            <h5 class="card-title">Top parcări sigure pe autostradă</h5>
                            <p class="card-text">Locuri sigure pentru odihnă noaptea.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Citește mai mult</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h4 class="mb-3">Postări recente</h4>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <strong>Alex:</strong> Tocmai am trecut prin Vama Borș – super rapid azi! 🚗
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <strong>Maria:</strong> Evitați E85 la ora 18 – trafic blocat total!
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <strong>Ion:</strong> Recomand un mic restaurant la km 122 pe A1. Super ciorbă!
                </a>
            </div>
        </section>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; 2024 FullFridge &ndash; Comunitatea șoferilor din toată țara
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
