<?php
class personne
{
    private $nom;
    private $code;
    private $email;
    private $numero;
    
    function __construct($nom, $code, $email, $numero)
    {
        $this -> nom = $nom;
        $this -> code = $code;
        $this -> email = $email;
        $this -> numero = $numero;
    }
    public function afficherPersonne()
    {
        echo "$this->nom, $this->code, $this->email, $this->numero <br>";
    }

}

?>
