<?php 

require("../credenzialiDB.php");
// ^^^ Connessione al db ^^^

$username = $_POST['username'];
$password = $_POST['password'];

//Se viene passato come paramentr l'email significa che è avvenuta una reg, altrimenti un login, quindi vengono gestiti in modo diverso
if(!isset($_POST['email'])){
    $query = "SELECT * FROM utente WHERE username = '$username' && psw = '$password'";
    $result = mysqli_query($conn, $query);   

    if(mysqli_num_rows($result) == 0){
        header("Location: login.php?errore");
        mysqli_close($conn);
    }else{
        /*
        Se l'utente ha inserito correttamente le credenziali verrà spedito alla home
        e ricunosciuto tramite il suo id univoco, non tramite username, così da evitare problemi di sicurezza.
        */
        ?>
        <form id="send" action="../sito/home.php" method="POST">
            <?php 
                $query = "SELECT * FROM utente WHERE username = '$username' && psw = '$password'";
                $id = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($id)) {
                    echo '<input type="hidden" name="id" value="'.$row['id'].'">';
                }
                echo '<input type="hidden" name="username" value="'.$username.'">';
                echo '<input type="hidden" name="password" value="'.$password.'">';
            ?>
        </form>
        <script type="text/javascript">
            location.reload();
            document.getElementById("send").submit();
        </script>

        <?php
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