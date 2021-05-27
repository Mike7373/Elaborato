<html>
    <head>
        <link rel="stylesheet" href="sito.css">
        <title>
            Home
        </title>
    </head>
    <body>
        <?php
            require("../credenzialiDB.php");
            // ^^^ Connessione al db ^^^

            //autenticazione
            $id_user = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
        ?>
        <div id="container">    
            <div id="content">
            <!--INIZIO DEL MENU-->
                <div id="nav">
                    <ul id="menu">
                        <li class="menu">
                            <a class="menu" href="">
                                Home
                            </a>
                        </li>
                        <li class="menu" title="I tuoi dati personali">
                            <a class="menu" href="">
                                Profilo
                            </a>
                        </li>
                        <li class="menu" title="Work in progress...">
                            <a class="menu">
                                Forum
                            </a>
                        </li>
                        <li class="exit">
                            <a class="menu" href="../log_reg/login.php">
                                Log-Out
                            </a>
                        </li>
                    </ul>
                </div>
                <!--INIZIO DEL POST DI BENVENUTO-->
                <div id="post">
                    <div class="title">
                        ! Regolamento !
                    </div>
                    <div class="text">
                        Ciao <b><?php echo "$username"?></b>, ti diamo il benvenuto sul nostro sito! Per assicurare una pacifica convivenza a tutti
                        si prega di leggere e rispettare il regolamento che segue:
                        <br>
                        <br>
                        1. E' vietata ogni forma di razzismo e disciminazione
                        <br>
                        2. E' vietato lo spam eccessivo
                        <br>
                        3. E' vietato insultare pesantemente altri utenti nei commenti
                        <br>
                        4. E' vietato postare annunci pubblicitari non autorizzati nei commenti
                        <br>
                        5. E' vietato sfruttare bug di qualsiasi tipo
                        <br>
                        <br>
                        Ogni utente che trasgredirà a queste semplici regole subirà una sospensione temporanea o premanente dell'account, 
                        in base alla gravità delle proprie azioni. Si consiglia inoltre di segnalare un utente tramite apposita icona 
                        nel caso un commento sia inappropriato, gli amministratori si occuperanno di gestire la situazione.
                        <br>
                        <br>
                        <b>
                            DETTO CIO' TI AUGURIAMO UNA BUONA PERMANENZA!!
                        </b>
                        
                    </div>
                    <!--BOTTONE DEI LIKE-->
                    <input type="button" value="LIKE: <?php 
                    $query = "SELECT COUNT(*) AS total FROM likepost WHERE id_post = '1'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo $row['total'];
                    }
                    ?>" onclick="like()">
                    <script>
                        function like(){
                            <?php
                                //riapro la connessione
                                $conn = mysqli_connect($hostDB, $userDB, $pswDB, $nameDB) or die("Impossibile connettersi al database");
                                //controllo se l'utente ha già messo like
                                $query = "SELECT * FROM likepost WHERE id_utente = '$id_user' && id_post = 1";
                                $result = mysqli_query($conn, $query);
                                if(mysqli_num_rows($result) == 0){
                                    //se non lo ha ancora messo lo aggiungo
                                    $query = "INSERT INTO likepost(id_utente, id_post) VALUES ('$id_user', 1)";
                                    $result = mysqli_query($conn, $query);
                                    //e aggiorno il numero di like visualizzato ricaricando la pagina
                                    mysqli_close($conn);
                                }else{
                                     //se lo ha già messo lo tolgo
                                     $query = "DELETE FROM likepost WHERE id_utente = '$id_user' && id_post = 1";
                                     $result = mysqli_query($conn, $query);
                                     //e aggiorno il numero di like visualizzato ricaricando la pagina
                                     mysqli_close($conn);
                                }
                            ?>
                            location.reload();
                        }
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>