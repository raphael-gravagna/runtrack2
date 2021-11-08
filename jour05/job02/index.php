<?php 
"jour" == true;
"jour" == false;

function bonjour($string = "jour"){
    if($string == true) 
    return(true);
    if($string == false)
    return(false);
}

if("jour" == true) {
    echo "Bonjour";
}
if("jour" == false) {
    echo "Bonsoir";
}

?>
