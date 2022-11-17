<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$date = date("Y-m-d H:i:s");


$id = fopen("inscription.log", "a");
if ($id==false) {
    die("Erreur lors douverture de fichier");
} else {
    flock($id, LOCK_EX);
    //fwrite($id, "[$date] Une nouvelle inscription : $prenom $nom - $email"."\n");
    fwrite($id, "$date;$nom;$prenom;$email"."\n");
    flock($id, LOCK_UN);

    $r=fclose($id);
    if ($r==false) {
        die("Erreur lors de la fermeture du fichier");
    }
}


?>