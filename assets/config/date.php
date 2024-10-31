<?php

    // function salutation(array $temps, $bonjour, $salut, $bonsoir){
    //     $bonjour = 5;
    //     $salut = 12;
    //     $bonsoir = 17;

    //     $heureactuelle = date('H', time());
    //     $jouractuelle = date('W', time());

    //     $temps = array(0, 7);

    //     if ((in_array($jouractuelle, $temps)) || ($heureactuelle <= $bonjour) || ($heureactuelle >= $bonsoir)) {
    //         echo"<spam class='home_title'>Bonsoir</spam>";
    //     }

    //     elseif ((in_array($jouractuelle, $temps)) || ($heureactuelle = $salut)) {
    //         echo"<spam class='home_title'>Salut </spam>";
    //     }
    //     else{
    //         echo"<spam class='home_title'>Bonjour </spam>";

    //     }
    // }

    $heure = date("H");

    if ($heure <= 13){
        echo"<spam class='home_title'>Bonjour </spam>";
    }elseif(($heure >= 13) && ($heure <= 17)){
          echo"<spam class='home_title'>Salut </spam>";
    }else{
        echo"<spam class='home_title'>Bonsoir</spam>";
    }

?>