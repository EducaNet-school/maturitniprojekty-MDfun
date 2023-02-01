<?php

$arr = [8,9,[10,11]];
$pocitat = 0;
function pole($arr){
    global $pocitat;
    foreach ($arr as $prom) {
        if (gettype($prom) == 'array') {
            pole($prom);
        }
        else {
            echo $prom . " + ";
            $pocitat = $pocitat + $prom;
        }
    }
}
pole($arr);
echo "= ".$pocitat;
?>