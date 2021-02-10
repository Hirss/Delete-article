<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Yeagarist</title>
</head>

<body>
    <ul>
        <?php
            //SHOW ARTICLE
            $sql = "SELECT id, titre from db ORDER BY date_publication DESC";
            $db = new PDO('mysql:host=localhost;dbname=', 'root', '');
            $request = $db->query($sql);
            while($row = $request->fetch()){
            ?>
                <li><a href="article.php?id=<?= $row["id"] ?>"><?= stripslashes($row["titre"]) ?></a><button href="delete.php?id=<?= $row['id'] ?>">Supprimer</strong></button></li>
            <?php
            }
        ?>
    </ul>
</body>

</html>