<?php
$pdo = new PDO('mysql:host=localhost;dbname=ton_projet;charset=utf8', 'root', '');
$recherche = isset($_GET['q']) ? $_GET['q'] : '';

if (!empty($recherche)) {
    $sql = "SELECT * FROM collaborateurs WHERE nom LIKE :recherche OR role LIKE :recherche";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['recherche' => '%' . $recherche . '%']);
} else {
    $sql = "SELECT * FROM collaborateurs";
    $stmt = $pdo->query($sql);
}


$listeCollaborateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <form action="/resultats" method="GET" class="barre-recherche">
            <input type="search" name="nom" placeholder="Recherchez l'employé !">
            <button type="submit">Rechercher</button>
        </form>
    </header>
</body>
</html>
