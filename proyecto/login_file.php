<!-- para hacer el login -->

<?php
require_once('db.php');
$username = $email = $passwordd = $password = '';

$username = $_POST['username'];
$passwordd = $_POST['passwordd'];
$password = MD5($passwordd);

$sql = "SELECT * FROM users WHERE username='$username' AND passwordd='$password'";

$result = mysqli_query($conexion, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $username=$row["username"];
        $email = $row["email"];
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['email'] =$email;
    }
    header("Location: home.php");
} else {
    echo "Invalid username or password";
}
?>