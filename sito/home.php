<html>
    <head>
        <link rel="stylesheet" href="sito.css">
        <title>
            Home
        </title>
    </head>
    <body>
        <?php
            
        ?>
        <div id="container">    
            <div id="content">
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
                <div id="post">
                    <div class="title">
                        ! Regolamento !
                    </div>
                    <div class="text">
                        Ciao @utente , ti diamo il benvenuto sul nostro sito! Per assicurare una pacifica convivenza a tutti
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
                    <input type="button" value="LIKE " onclick="like()">
                    <script>
                        function like(){
                            var like = <?php 
                                
                                ?>;
                        }
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>