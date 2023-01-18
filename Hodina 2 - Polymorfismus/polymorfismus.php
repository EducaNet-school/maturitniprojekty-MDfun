<?php
class auto{
    protected $typ;
    protected $znacka;

    public function __construct($typ, $znacka){
        $this->typ = $typ;
        $this->znacka = $znacka;
    }
    public function vratInfo(){
        return "<br>Typ auta: ".$this->typ."<br>Znacka auta: ".$this->znacka;
    }
}
class nakladak extends auto{
    private $nosnost;
    public function __construct($typ, $znacka, $nosnost){
        parent::__construct($typ, $znacka);
        $this->nosnost = $nosnost;
    }
    public function vratInfo(){
        return parent::vratInfo()."<br>Nosnost: ".$this->nosnost."kg<br>";
    }
}
class elektrickeAuto extends auto{
    private $kapacita_baterie;
    public function __construct($typ, $znacka, $kapacita_baterie){
        parent::__construct($typ, $znacka);
        $this->kapacita_baterie = $kapacita_baterie;
    }
    public function vratInfo()
    {
        return parent::vratInfo()."<br>Kapacita baterie: ".$this->kapacita_baterie."MW<br>";
    }
}
$auto1 = new auto('nakladak', 'BMW');
$auto2 = new nakladak('nakladak', 'Renault', 1000);
$auto3 = new elektrickeAuto('elektricke auto', 'Tesla', 3000);
echo $auto2->vratInfo();
echo $auto3->vratInfo();
?>