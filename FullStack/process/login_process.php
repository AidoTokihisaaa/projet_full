<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['user'] = $username;
    header("Location: /fullstack/FullStack/index.php");
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect";
}

$stmt->close();
$conn->close();
?>
