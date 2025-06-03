<?php
$host = "localhost";
$user = "root";
$pass = ""; // fără parolă implicit în XAMPP
$dbname = "fullfridge";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}
?>
