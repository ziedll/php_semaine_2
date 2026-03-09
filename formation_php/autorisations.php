<?php
$age = 19;
$role = "admin";
$motDePasseSaisi = "secret123";

if($motDePasseSaisi == "secret123"){
    echo "mot de passe correct" . "<br>";
}else{
    echo "mot de passe incorrect" . "<br>";
}
if ($motDePasseSaisi == "secret123" && $age>=18){
    echo "Accès complet autorisé" . "<br>";
}elseif ($motDePasseSaisi == "secret123" && $age<18){
    echo "Accès restreint (mineur) " . "<br>";
}else{
    "accès refusé" ."<br>";
}
if ($role == "admin" || $role == "employé"){
    echo "Vous avez accès au réseau d'entreprise";
}else{
    echo "Vous êtes sur le réseau invité";
}