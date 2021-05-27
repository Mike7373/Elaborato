<?php
    $hostDB = "localhost";
    $userDB = "root";
    $pswDB = "";
    $nameDB = "elaborato";
    
    $conn = mysqli_connect($hostDB, $userDB, $pswDB, $nameDB) or die("Impossibile connettersi al database");
?>