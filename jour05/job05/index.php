<?php 


function occurence($str, $char) {
    for($i = 0; isset($str[$i]); $i++) {
        $compteur = 0;
        if($str[$i] == $char) {
            $compteur++;
        }
    }
    return $compteur;

    }

    echo occurence("nike sa mère la réinsertation", 'e')
    ?>