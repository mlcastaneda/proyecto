<!-- para ingresar datos a la db de registro -->

<?php
require_once('db.php');
$username = $email = $passwordd = $password = '';

$username = $_POST['username'];
$email = $_POST['email'];
$passwordd = $_POST['passwordd'];
$password = MD5($passwordd);

$sql = "INSERT INTO users(username, email, passwordd) VALUES ('$username', '$email', '$password')";

$result = mysqli_query($conexion, $sql);
if($result){
    header("Location: login.php");
} else {
    echo "Error: " . $sql;
}
?>