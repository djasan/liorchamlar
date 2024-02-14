<?php 

class Employe {
    public $nom ;
    public $prenom;
    public $age;
    public function presentation($nom,$prenom,$age){
        var_dump("Bonjour, je suis $prenom $nom et j ai $age ans ");

}

}

$nom ="Chamla";
$prenom = "Lior";
$age =32;


$nom2= "Pernin";
$prenom2="Magalie";
$age2=32;

function presentation($nom,$prenom,$age ){
var_dump("Bonjour, je suis $prenom $nom et j ai $age ans ");

}
presentation($nom, $prenom, $age);
presentation($nom2, $prenom2, $age2);



?>