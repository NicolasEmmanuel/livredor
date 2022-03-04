<?php

    //Parametrage de ma base de donnée
    $host = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "livredor";


    //Connection a la base de donnée
    $mysqli = @new mysqli($host, $username, $password, $dataBase);



    if ($mysqli->connect_errno) {
        echo "Site en maintenance";
        exit(); //arrete l'execution du programe
    }

?>