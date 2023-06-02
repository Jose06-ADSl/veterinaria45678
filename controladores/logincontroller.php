<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT");
header("allow: GET, POST, OPTIONS, PUT");

require '../database.php';
session_start();

$message = '';

$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->bindParam("email", $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() == 0) {
    echo '<p>El usuario no está registrado. Por favor, regístrate primero.</p>';
    
} else {
    $email = $stmt->fetch(PDO::FETCH_ASSOC);
    $storedPasswordHash = $email['password'];
    if (password_verify($password, $storedPasswordHash)) {
        $_SESSION['email'] = $email;
        

        echo '<p>Inicio de sesión exitoso. ¡Bienvenido, ' , '<strong>', $email['nombres']  ,'</strong>' ,'!</p>';
        
    } else {
     echo '<p>Contraseña incorrecta. Por favor, verifica tus credenciales.</p>';
       
    }
}

?>