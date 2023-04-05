<?php
class film {
    public $nazev;
    public $cena;
    public $vekova_hranice;

    public function __construct($nazev,$cena,$vekova_hranice){
        $this->nazev = $nazev;
        $this->cena = $cena;
        $this->vekova_hranice = $vekova_hranice;
    }
}
class divak {
    public $jmeno;
    public $penize;
    public $vek;

    public function __construct($jmeno, $penize, $vek){
        $this->jmeno = $jmeno;
        $this->penize = $penize;
        $this->vek = $vek;
    }
}
class kino {
    public function ProdejListku($film, $divak){
        if ($divak->vek < $film->vekova_hranice){
            throw new Exception("Divak ".$divak->jmeno." je moc mlady na film ".$film->nazev);
        }
        if ($divak->penize < $film->cena){
            throw new Exception("Divak ".$divak->jmeno." nema penize na film ".$film->nazev);
        }
        echo "Prodano!";
    }
}

$film1 = new film("John Wick 4", 50,18);
$film2 = new film("Mala morska vila", 20, 3);

$divak1 = new divak("Ondra", 80, 20);
$divak2 = new divak("Rebecca", 10, 9);

$kino = new kino();

try {
    $kino->ProdejListku($film1, $divak1);
} catch (Exception $e) {
    echo "Je to problem bracho: " . $e->getMessage();
}
?>