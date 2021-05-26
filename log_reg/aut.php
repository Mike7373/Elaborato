<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$hostDB = "localhost";
$userDB = "root";
$pswDB = "";
$nameDB = "elaborato";
$conn = mysqli_connect($hostDB, $userDB, $pswDB, $nameDB) or die("Impossibile connettersi al database");

if(!isset($_POST['email'])){
    $query = "SELECT * FROM utente WHERE username = '$username' && psw = '$password'";
    $result = mysqli_query($conn, $query);   

    if(mysqli_num_rows($result) == 0){
        header("Location: login.php?errore");

    }else{
        header("Location: ../sito/home.php");
    }
}else{
    $email = $_POST['email'];
    $query = "SELECT * FROM utente WHERE username = '$username' || email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) != 0 ){
        header("Location: registrazione.php?errore");
    }else{
        $query = "INSERT INTO utente(username, psw, email) VALUES('$username','$password', '$email')";
        $result = mysqli_query($conn, $query);
        header("Location: login.php?registered");
    }
}



?>