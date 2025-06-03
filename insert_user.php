<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $numar = $_POST['numar'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verifică dacă emailul există deja
    $check = $conn->prepare("SELECT id FROM register WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<div class='alert alert-warning text-center'>Emailul este deja folosit. Încercă altul.</div>";
    } else {
        // Inserare utilizator nou
        $stmt = $conn->prepare("INSERT INTO register (email, username, numar, parola) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $username, $numar, $password);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>Eroare la întreaga contului: " . $stmt->error . "</div>";
        }
        $stmt->close();
    }
    $check->close();
}

$conn->close();
?>
