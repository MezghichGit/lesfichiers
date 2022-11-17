<?php

//$id = fopen("C:\Users\amine\Desktop\log\log.txt", "a");
$nom = "Mohamed Amine MEZGHICH";
$email = "ma.mezghich@gmail.com";
$date = date("Y-m-d H:i:s");
$id = fopen("etudiants.log", "a");
if ($id==false) {
    die("Erreur lors douverture de fichier");
} else {
    flock($id, LOCK_EX);
    fwrite($id, "[$date] Une nouvelle inscription : $nom - $email"."\n");
    flock($id, LOCK_UN);

    $r=fclose($id);
    if ($r==false) {
        die("Erreur lors de la fermeture du fichier");
    }
}
