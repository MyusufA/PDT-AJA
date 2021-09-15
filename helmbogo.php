<?php
class Helm 
{ 
 var $warna;  var $merk; 
 var $harga; 
  
 function __construct() //Konstruktor

 { 
  $this->warna = "Hitam"; 
  $this->merk  = "Honda"; 
  $this->harga = "Rp.70.000,00"; 
 } 
 
 function gantiWarna ($warnaBaru) 
 { 
  $this->warna = $warnaBaru; 
 } 
  
 function tampilWarna () 
 { 
  echo "<br>Warna Helm : " . $this->warna; 
 } 
 
 function gantiMerk ($MerkBaru)
 {
  $this->merk = $MerkBaru;
 }
 
 function tampilMerk ()
 {
	 echo "Merk Helm : " . $this->merk;
 }
 
  function gantiHarga ($HargaBaru)
 {
  $this->harga = $HargaBaru;
 }
 
 function tampilHarga ()
 {
	 echo "<br>Harga Helm : " . $this->harga;
 }
} 
 
$a = new Helm(); 
$b = new Helm(); 
$c = new Helm();

echo "<b>Helm Pertama</b><br>"; 
$a->tampilMerk();
$a->tampilWarna(); 
$a->tampilHarga();
echo "<br>";
echo "<br><b>Helm Kedua</b><br>"; 
echo "Helm kedua berganti warna<br>";
$b->tampilMerk(); 
$b->gantiWarna("Putih"); 
$b->tampilWarna(); 
$b->tampilHarga();
echo "<br>";
echo "<br><b>Helm Ketiga</b><br>"; 
echo "Helm Ketiga berganti Merk<br>";
$c->gantiMerk("JPN"); 
$c->tampilMerk(); 
$c->tampilWarna();
$c->gantiHarga("Rp.100.000,00");
$c->tampilHarga();

?>
