
<?php

class Numero {

    public $num = array();

    public function __construct($num) {
        $this->num = $num;
    }

    //pour générer un input de type number
    public function input ($name) {
        return '';
    }
    
    //pour générer un bouton de type submit
    public function submit () {
        return '';
    }

    private function counter ($taille) {
        $this->count($taille);
    }

}