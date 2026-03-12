<?php
class Personnage{
    public $nom;
    public $vie;
    public $force;
    public function __construct(){
        $this->nom = "";
        $this->vie = 100;
        $this->force = 10;
    }
    public function attaquer($cible){
    $cible->vie -= $this->force;
    echo "$this->nom attaque $cible->nom et lui retire $this->force PV <br>";
    }
}
$guerrier = new Personnage();
$guerrier->nom = "Maximus";
$guerrier->force = 20;
$monstre = new Personnage();
$monstre->nom = "Shadow";
$monstre->force = 15;
echo $guerrier->nom . "<br>";
echo $guerrier->force . "<br>";
echo $monstre->nom . "<br>";
echo $monstre->force . "<br>";
$guerrier->attaquer($monstre);
echo $monstre->vie . "<br>";
$monstre->attaquer($guerrier);
echo $guerrier->vie . "<br>";
