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
        mysqli_close($conn);
    }else{
        ?>

        <form id="send" action="../sito/home.php" method="POST">
            <?php 
                foreach($_POST as $name => $value){
                    echo '<input type="hidden" name="'.htmlentities($name).'" value="'.htmlentities($value).'">';
                }
            ?>
        </form>
        <script type="text/javascript">
            document.getElementById("send").submit();
        </script>

        <?
        mysqli_close($conn);
    }
}else{
    $email = $_POST['email'];
    $query = "SELECT * FROM utente WHERE username = '$username' || email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) != 0 ){
        header("Location: registrazione.php?errore");
        mysqli_close($conn);
    }else{
        $query = "INSERT INTO utente(username, psw, email) VALUES('$username','$password', '$email')";
        $result = mysqli_query($conn, $query);
        header("Location: login.php?registered");
        mysqli_close($conn);
    }
}
?>