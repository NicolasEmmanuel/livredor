<?php

    var_dump ($_POST);

    include ("../config.php");

    // Ceci est vrai, alors le texte est affiché
    if (isset($_POST["nom"])) {
        echo "Cette variable existe, donc je peux l'afficher.";


    //Création de ma requete d'insertion dans la table message
    $QueryInsert = "INSERT INTO `messages` (`id`, `nom`) VALUES (NULL, '".$_POST["nom"]."')";  

    
    //Execution de ma requete d'insertion
    if ($mysqli->query($QueryInsert)){
        echo "requete exécuté avec succès";
}
    }

    else{
        echo "la variable est inexistante";
    }
?>

        <a href ="\index.php">retour</a></br>


