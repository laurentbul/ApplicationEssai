<?php
    // en haut de page, avec la requête :
   // $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    var_dump($tableau);
    // on importe le contenu du fichier "db.php"
    include 'db.php';
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query('SELECT * FROM artist');
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>
// ... après le bloc PHP :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Liste</title>
</head>
<body>
    <table style="border: 1px solid;";>
        <trborder: 1px solid;>
            <th>ID</th>
            <th>Nom</th>
        </tr>

        <?php foreach ($tableau as $artist): ?>

        <?php var_dump($artist); // Le var_dump() est écrit à titre informatif ?>
        <tr>
            <td style="border:1px";><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>

        </tr>

        <?php endforeach; ?>

    </table>
</body>
</html>