<?php

class Employe
{
    public $nom;
    public $prenom;
    public $age;
    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j ai $this->age ans ");
    }
}


$employe1 = new Employe();
$employe1->prenom = "Lior";
$employe1->nom = "Chamlar";
$employe1->age = 32;

$employe2 = new Employe();
$employe2->prenom = "Magalie";
$employe2->nom = "Pernin";
$employe2->age = 32;

$employe1->presentation();
$employe2->presentation();