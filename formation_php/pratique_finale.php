<?php
/* phase 1 */
$membres = ["Maxime"];
$membres[]= "Alice";
$membres[]= "Bob";
$codeSecret = "Tyrolium26";

/* phase 2 */
function verifierAcces($prenom,$motDePasse){
    if($prenom == "Maxime" && $motDePasse == "Tyrolium26"){
        echo "Accès Administrateur accordé pour $prenom" . "<br>";
    }
    elseif ($prenom == "Bob" || $prenom == "Alice"){
        echo "Accès utilisateur standard accordé pour $prenom" . "<br>";
    }
    else{
        echo "Accès refusé" . "<br>";
    }
}

/*phase 3 */

for($i=0; $i<3;$i++){
    verifierAcces($membres[$i],$codeSecret);
}
echo "--------------<br>";
foreach($membres as $membre){
    verifierAcces($membre,$codeSecret);
}