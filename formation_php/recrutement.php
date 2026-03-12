<?php
if(isset($_POST["nom"])){
    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $poste = $_POST["poste"];
    if($age<18){
        echo "Désolé $nom, vous devez être majeur pour rejoindre Tyrolium";
    }else{
        echo "Félicitaions $nom ! Votre profil de $poste a été enregistré.";
    }
}

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
<form action="" method="POST">
    <input type="text" name="nom" placeholder="Nom du candidat">
    <input type="number" name="age" placeholder="Votre age">
    <select name="poste" id="">
        <option value="Développeur">Développeur</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
    </select>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>
  