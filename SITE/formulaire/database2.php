<!DOCTYPE html>
<html>
    <head>
        <title>movix</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        

        <?php
            
            define('HOST', 'localhost');
            define('DB_NAME','6tt_romain');
            define('USER','root');
            define('PASS','');

            try{
                $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME , USER, PASS);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOExeption $e){
                echo $e;
            }
           
        ?>

    </body>
</html>