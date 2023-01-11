<?php
class money {
    private $value;

    public function __construct($seznam){
        $this->value = $seznam;
    }
    public function zobrazit(){
        return $this->value;
    }
}
class bankomat {
    private $input;

    public function __construct($money){
        $this->input = $money;
    }
    public function vyber($money){
        $reverse = array_reverse($money, true);
        $i = 0;
        $coins = [$this->input];
        foreach ($reverse as $value) {
            $this->input = $coins[$i];
            $output = $this->input % $value;
            $calculate = ($this->input - $output) / $value;
            array_push($coins, $output);
            echo "Bankovka ".$value.": ".$calculate."ks<br>";
            $i++;
        }
    }
}
//tovarna na objekty
$money_value = new money(array(1,2,5,10,20,50,100,200,500,1000));
$bankomat = new bankomat(2225); // Tady se da zmenit ta castka
$bankomat->vyber($money_value->zobrazit());
?>