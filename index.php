<?php
    var_dump ($_POST);

    include ("config.php");
?>
    
    <a href ="pages\edit.php">editer</a></br>

<?php

    



    //Ma requete de lecture de la table message
    //Selectionner tous les champs (ecrt " * ") de la table message

        $result = $mysqli->query("SELECT * FROM messages");
    
    //var_dump($result);

        foreach ($result as $rowMessage) {
    // Traitement des données recupéré depuis la base de donnée 
            echo $rowMessage["nom"]."</br>";
    }

    //echo $stagiaires[1]["prenom"];

?>

<form
    method="post"
    action="/pages/edit.php">

    <!-- le commentaire-->
    <strong> Veuillez rentrer une information </strong></br>
    <input type="text" name="name"/> </br>
    <input type="submit" value="envoyer"/>

</form>
