<?php
    /* BACK */
    $prenom = $_GET['prenom'];

    if(isset($prenom)){
        echo "Votre prénom est : $prenom";
    }else{
        echo "Vous n'avez pas saisi de prénom";
    }
?>

<!-- FRONT -->
<h1>Here front</h1>
<form>
    <input type="text" name="prenom" placeholder="votre prenom">
    <button type="submit">Envoyé</button>
</form>