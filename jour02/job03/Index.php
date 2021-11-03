<?php
    for ($var = 0; $var <= 100; $var = $var + 1) {
        if($var >= 0 && $var <=20 ) {
            echo "<i>"."$var"."<br/>"."<i>"; 
        }

        elseif($var == 41)
            echo "La Plateforme_";

        elseif($var >= 25 && $var <=50) {
            echo "<u>"."$var"."<u/>"."<br/>"; 
        }

        elseif($var >=21 && $var <=24) {
            echo "$var"."<br/>";

        }

    }
    ?>