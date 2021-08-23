
<?php

class Numero {

    public $num = array();

    public function __construct($num) {
        $this->num = $num;
    }

    //pour générer un input de type number
    public function input ($name) {
        return '<input type="number" class="form-control" id="inputPassword2" name="' . $name . '" placeholder="Entrer le numero">';
    }
    
    //pour générer un bouton de type submit
    public function submit () {
        return '<button type="submit" class="btn btn-primary mb-3">Valider</button>';
    }

    private function counter ($taille) {
        $this->count($taille);
    }

}