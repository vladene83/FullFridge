<?php
session_start();
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Caută utilizatorul după email
    $stmt = $conn->prepare("SELECT id, username, parola FROM register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['parola'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header("Location: index_log.php");
            exit();
        } else {
            echo "<div class='alert alert-danger text-center'>Parolă incorectă!</div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'>Email inexistent!</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
