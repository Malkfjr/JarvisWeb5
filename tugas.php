<?php

class kendaraan {
    public $merk;
    public $jumlahroda;

    function __construct($merk, $jumlahroda)
    {
        $this ->merk = $merk;
        $this ->jumlahroda = $jumlahroda;
    }

    function infokendaraan() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Jumlah Roda: " . $this->jumlahroda . "<br>";
    }
}

class SepedaMotor extends kendaraan {
    public $kapasitasMesin;

    function __construct($merk, $jumlahroda, $kapasitasMesin)
    {
        parent::__construct($merk, $jumlahroda);
        $this ->kapasitasMesin = $kapasitasMesin;
    }

    function infoSepedaMotor() {
        $this->infokendaraan();
        echo "Kapasitas Mesin: " . $this->kapasitasMesin . "cc<br>";
    }
}

$motorku = new SepedaMotor("Honda ADV", 3, 150);

echo "Informasi Sepeda Motorku: <br>";
$motorku->infoSepedaMotor();

?>