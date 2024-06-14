 <?php

    // $serveur= "localhost";
    // $username="root";
    // $password="";
    // $database="db_passager";

    // $connexion = new mysqli($serveur,$username,$password,$database);


    // if($connexion->connect_error)
    // {
    //  exit('La connexion a echoué'.$connexion->connect_error);
    // }


    try {
        $dsn = 'mysql:host=localhost;dbname=db_passager';
        $username = 'root';
        $password = '';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        $connexion = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        exit;
    }
    


    
    ?>

