<?php
function afficherMessageBienvenue(){
    echo "Bienvenue sur l'intranet de l'entreprise <br>";
}
afficherMessageBienvenue();
function accueillirMembreTyrolium($prenom, $role){
    echo "Bonjour " . $prenom . " votre accès en tant que  " . $role . " est bien cofigurée chez Tyrolium" . "<br>";
}
accueillirMembreTyrolium("Alice","Développeuse");
accueillirMembreTyrolium("Marc","Designer" );



