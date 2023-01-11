<?php
error_reporting(E_ALL & ~E_NOTICE);
$jmeno = isset($_POST["jmeno"]) ? $_POST["jmeno"] : "";
$adresa = isset($_POST["adresa"]) ? $_POST["adresa"] : "";
readfile("index.html");

$jmeno_devide = explode(" ", $jmeno);
$adresa_counter = strlen($adresa);
if ($jmeno != ""){
    if ($jmeno_devide[1] === NULL){
        echo "Napiš cely jmeno";
    }
} else {
    echo "Jméno nemůže zůstat prazdny";
}
if ($adresa != ""){
    if ($adresa_counter <= 10){
        echo "Adresa neexistuje";
    }
} else {
    echo "Adresa nemuze zustat prazdna";
}
if ($jmeno != "" && $jmeno_devide[1] != NULL && $adresa != "" && $adresa_counter > 10){
    echo "Všechno je vpořadku";
}
?>