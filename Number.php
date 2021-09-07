
<?php

class Number {

    // Tableau des operateurs
    const TAB_OPERATOR = [
        'Orange' => '07',
        'Mtn' => '05',
        'Moov'=> '01'
    ];

    // Tableau des premiers nombre du num
    const TAB_NUMBER = [
        'Orange' => [
            '07', '08', '09', '77', '78', '79', '87', '88', '89'
        ],
        'Mtn' => [
            '04', '05', '06', '74', '75', '76', '84', '85', '86'
        ],
        'Moov' => [
            '01', '02', '03', '70', '71', '72', '73', '80', '81', '82', '83'
        ]
    ];

    public static function checkNumberOperator($number)
    {
        
        $number = substr($number, 0, -8);

        if (in_array($number, self::TAB_OPERATOR)) {
            foreach (self::TAB_OPERATOR as $key => $value) {
                if ($value === $number) {
                    return $key;
                }
            }
        }
        
        /**
         * $number est le numero saisi dans le champ numero du formulaire
         * Recupere les 2 premiers caracteres de $number
         * verifie dans le tableau TAB_OPERATOR si les 2 caracteres de $number exist avec la function in_array
         * si existe renvoie la clé
         * si n'existe pas renvoie une message ex: "Operateur n'existe pas"
         */
    }

    public static function checkFirstNumber($num)
    {

        $num = substr($num, 2, -6);

        if (in_array($num, self::TAB_NUMBER)) {
            foreach (self::TAB_NUMBER as $k => $v) {
                if ($v === $num) {
                    return $k;
                }
            }
        }
    }
}