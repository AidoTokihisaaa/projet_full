<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_query = "SELECT * FROM users WHERE email = '$email' OR name = '$name'";
$result = $conn->query($check_query);
if ($result->num_rows > 0) {
    echo "L'adresse e-mail ou le nom d'utilisateur existe déjà";
} else {
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "L'utilisateur a bien été enregistré";
        
        session_start();
        $_SESSION['user'] = $name;
        
        header("Location: /fullstack/FullStack/index.php");
        exit;
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>