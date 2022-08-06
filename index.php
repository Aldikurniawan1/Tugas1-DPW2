<?php

include "Animal.php";

class kucing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "meong".$this ->suara;
    }
}

$ipin = new Kucing;
$ipin->jumlah_kaki = 4;
$ipin->bisa_terbang = "Tidak Bisa Terbang";
echo "ipin adalah kucing <br>";
echo "Punya kaki sebanyak : ".$ipin->jumlah_kaki."<br>";
echo $ipin->bisa_terbang."<br>";
echo "Suaranya : ".$ipin->bersuara();

echo "<hr>";

class Anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Guk Guk2".$this ->suara;
    }
}

$Dep = new Anjing;
$Dep->jumlah_kaki = 4;
$Dep->bisa_terbang = "Tidak Bisa Terbang";
echo "Dep adalah Anjing <br>";
echo "Punya kaki sebanyak : ".$Dep->jumlah_kaki."<br>";
echo $Dep->bisa_terbang."<br>";
echo "Suaranya : ".$Dep->bersuara();

echo "<hr>";

class Elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Miiipp".$this ->suara;
    }
}

$Manzi = new Elang;
$Manzi->jumlah_kaki= 2;
$Manzi->bisa_terbang = "Bisa Terbang";
echo "Manzi adalah Elang <br>";
echo "Punya kaki sebanyak : ". $Manzi->jumlah_kaki."<br>";
echo $Manzi->bisa_terbang."<br>";
echo "Suaranya : ".$Manzi->bersuara();

echo "<hr>";

class Angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "kwaak kwaak".$this ->suara;
    }
}

$masha = new Angsa;
$masha->jumlah_kaki = 2;
$masha->bisa_terbang = "Bisa Terbang";
echo "masha adalah Angsa <br>";
echo "Punya kaki sebanyak : ".$masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Suaranya : ".$masha->bersuara();

echo "<hr>";



