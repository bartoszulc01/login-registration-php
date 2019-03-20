<?php
session_start();
?>
<html>
    <head>
            <title> home page </title>
    </head>
    <body>
        
        <h1>
            <a href="logout.php"> wyloguj </a>
            <h1> witaj 
            <?php
    
           echo $_SESSION['user'];
                ?> </h1>
        </h1>
    </body>
</html>