<?php
$projets = ["Site vitrine"];
$projets[] = "Intranet";
$projets[] = "Application Mobile";
for($i = 0; $i < 3; $i++){
    echo $projets[$i] . "<br>";
}
echo "<br>";
$j=0;
while($j < 3){
    echo $projets[$j] . "<br>";
    $j++;
}
 echo "<br>";
foreach($projets as $projetActuel){
    echo "Projet (Foreach): $projetActuel" . "<br>";
}
