<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="javascript.js">
        </script>
    </head>
    <body>
        <div id="container">
            <form method="POST" action="aut.php" id="log_form" >
                <div id="field_box">
                    <div id="title">
                        Login
                    </div>
                    <div class="<?php 
                        if(isset($_GET['errore']))
                            echo "notExist";
                        else
                            echo "invisible";
                    ?>">        
                        Nome utente o password errati    
                    </div>
                    <div class="<?php 
                        if(isset($_GET['registered']))
                            echo "registered";
                        else
                            echo "invisible";
                    ?>">        
                        Registrazione avvenuta con successo    
                    </div>
                    <input type="text" class="field" id="username" name="username" placeholder="Username">
                    <input type="password" class="field" id="password" name="password" placeholder="Password">
                    <input type="button" id="send_button" value="Invia" onclick="send('login')">
                    <a href="registrazione.php" id="switch">
                        Non sei registrato? Clicca qui!
                    </a>
                </div>
            </form> 
        </div>
    </body>
</html>