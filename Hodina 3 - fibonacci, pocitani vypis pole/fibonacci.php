<?php
function fibonacci($main_number){
    if ($main_number <= 1){
        return 0;
    }
    else if ($main_number == 2){
        return 1;
    }
    else {
        return fibonacci($main_number - 1) + fibonacci($main_number - 2);
    }
}
$main_number = 60;
for ($i = 0; $i < $main_number; $i++){
    echo fibonacci($i + 1). ", ";
}
?>