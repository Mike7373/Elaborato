<html>
    <head>
        <title>
            Registrazione
        </title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="javascript.js">

        </script>  
    </head>
    <body>
        <div id="container">
            <form method="POST" action="aut.php" id="reg_form">
                <div id="field_box">
                    <div id="title">
                        Registrazione
                    </div>
                    <div class="<?php 
                        if(isset($_GET['errore']))
                            echo "notExist";
                        else
                            echo "invisible";
                    ?>">        
                        Nome utente o email già esistenti  
                    </div>
                    <input type="text" class="field" id="username" name="username" placeholder="Username">
                    <input type="password" class="field" id="password" name="password" placeholder="Password">
                    <input type="email" class="field" id="email" name="email" placeholder="Email">
                    <input type="button" id="send_button" value="Invia" onclick="send('registration')">
                    <a href="login.php" id="switch">
                        Sei già registrato? Clicca qui!
                    </a>
                </div>
            </form> 
        </div>
    </body>
</html> 