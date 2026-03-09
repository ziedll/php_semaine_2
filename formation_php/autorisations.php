<?php
$age = 19;
$role = "client";
$motDePasseSaisi = "secret123";


$motDePasseSaisiUser1 = "user123";
$motDePasseSaisiUser2 = "COUCOU";

function verifMDP()
{
    echo "Loading en attente de verif";
}

if($motDePasseSaisi == "secret123"){
    echo "mot de passe correct" . "<br>";
}else{
    echo "mot de passe incorrect" . "<br>";
}
if ($motDePasseSaisi == "secret123" && $age>=18){
    echo "Accès complet autorisé" . "<br>";
    if ($role == "admin" || $role == "employé"){
        echo "Vous avez accès au réseau d'entreprise" . "<br>";
    }else{
        echo "Vous êtes sur le réseau invité" . "<br>";
    }
}elseif ($motDePasseSaisi == "secret123" && $age<18){
    echo "Accès restreint (mineur) " . "<br>";
    if ($role == "admin" || $role == "employé"){
        echo "Vous avez accès au réseau d'entreprise" . "<br>";
    }else{
        echo "Vous êtes sur le réseau invité" . "<br>";
    }
}else{
    "accès refusé" . "<br>";
}
verifMDP($role);
verifMDP("Salut");