<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT");
header("allow: GET, POST, OPTIONS, PUT");

require '../database.php';

$message = '';


$nombres = $_POST[ 'nombres'];
$email = $_POST['email'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email= :email");
$stmt->bindParam("email", $email, PDO::PARAM_STR);
$stmt->execute();

if($stmt->rowCount() > 0){
echo '<p>¡Este usuario ya se encuentra registrado!</p>';

}
if($stmt->rowCount() == 0) {
    $stmt = $conn->prepare("INSERT INTO usuarios (email, nombres, apellidos, telefono, password) VALUES (:email, :nombres, :apellidos, :telefono, :password_hash)");
    $stmt->bindParam("email", $email, PDO::PARAM_STR);
    $stmt->bindParam("nombres", $nombres, PDO::PARAM_STR);
    $stmt->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
    $stmt->bindParam("telefono", $telefono, PDO::PARAM_STR);
    $stmt->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
    $result = $stmt->execute();


    if($result){
            echo "¡El usuario " , '<strong>', $email ,'</strong>' , " se registro exitosamente!";
        } else {
            echo '<p>There was an error registering your account.</p>';
        }
}

?>