<?php

class Employe
{
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom,$prenom,$age){


        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;

       


    }


    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j ai $this->age ans ");
    }
}


$employe1 = new Employe("Lior","Chamla",32);


$employe2 = new Employe("Magalie","Pernin",32);


$employe1->presentation();
$employe2->presentation();