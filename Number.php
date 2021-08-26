
<?php

class Number {

    // Tableau des operateurs
    const TAB_OPERATOR = [
        'Orange' => '07',
        'Mtn' => '05',
        'Moov', '01'
    ];

    public static function checkNumberOperator($number)
    {
        
        $number = substr($number, 0, -8);

        if (in_array($number, TAB_OPERATOR)) {
            return TAB_OPERATOR;
        } else {
            echo "L'Opérateur n'existe pas";
        }
        
        /**
         * $number est le numero saisi dans le champ numero du formulaire
         * Recupere les 2 premiers caracteres de $number
         * verifie dans le tableau TAB_OPERATOR si les 2 caracteres de $number exist avec la function in_array
         * si existe renvoie la clé
         * si n'existe pas renvoie une message ex: "Operateur n'existe pas"
         */
    }
}