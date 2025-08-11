<?php


namespace App\Complement;




class Compte
{

    public function Compte($compte){
        $retour = 0;
        switch($compte){
            case "Espece":{ $retour = "571"; break;}
            case "Orange Money":{ $retour = "523"; break;}
            case "Wave":{ $retour = "522"; break;}
            case "Banque":{ $retour = "521"; break;}

        }
        return $retour;
    }
}