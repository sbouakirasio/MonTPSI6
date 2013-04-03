<?php

class repertoire
{
    private $liste = array();

    function __construct($liste)
    {
        $this->liste = $liste;
    }
    public function afficherRepertoire()
    {
        foreach($this->liste as $pers)
        {
            $pers->afficherPersonne();
        }
    }
}
?>
