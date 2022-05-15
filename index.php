<!DOCTYPE html>
<html>
    <body>
    <?php
echo"<p><h1>Belajar Variabel Hands On</h1></p>";
//String
$namaMurid = "Kevin";
//String
$warnaMobil = "Merah";
//Integer
$umurCalvin= 25;
//float
$beratBadanCalvin = 57.2;
//Boolean
$isSmart = true;

echo"<br>Nama Murid Universtitas A: $namaMurid </br>";
echo"<br>Warna Mobil $namaMurid : $warnaMobil </br>";
echo"<br>umur $namaMurid : $umurCalvin</br>";
echo"<br> berat badan $namaMurid : $beratBadanCalvin</br>";
echo"<br> Apakah $namaMurid : itu $isSmart ?</br>";


echo"<h1> Belajar Shorthand Operator</h1>";

$uangBapak = 20000;
$hargaAyam = 10000;

$uangBapak - $hargaAyam;
$uangBapak -= $hargaAyam; //$uangBapak = $uangBapak-$hargaAyam//

echo "<br>Uang Bapak Setelah ini beli ayam:$uangBapak </br>";

$uangBapak += 1000;

echo "Uang bapak setelah dapat bonus: $uangBapak;";

echo"<h1> Belajar contitional statement hands On</h1>";

$umurClara = 22;

if($umurClara < 20 ){
    echo 'Minum susu';
} else{
    echo 'Minum Amer';
}

?>
    </body>
</html>


