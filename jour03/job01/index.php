<?php
$i = 0;
    $table = [200, 204, 173, 98, 171, 404, 459];
    while(isset($table[$i])) {
    if($table[$i] % 2 == 0 ) {
        echo $table[$i]. " est paire"."<br/>";
    }
    else{
        echo $table[$i]. " est impaire"."<br/>";
    }
    $i = $i +1;
    }

//////////////**for version*/////*///


    /*$table = [200, 204, 173, 98, 171, 404, 459];
    for($i = 0; isset($table[$i]); $i++) {
    if($table[$i] % 2 == 0 ) {
        echo $table[$i]. " est paire"."<br/>";
    }
    else{
        echo $table[$i]. " est impaire"."<br/>";
    }
    }*/

?>
