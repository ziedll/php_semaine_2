<?php

$articles =[
    "Switch 2",
    "Maxime",
    "Ordi HP"
];

for($i  = 0; $i < 3; $i++){
    echo $articles[$i] . "<br>" ;
}

$j = 0;
while ($j <= 3){
    echo $articles[$j] . "<br>" ;
    $j++;
}

foreach ($articles as $article){
    echo $article . "<br>" ;
}