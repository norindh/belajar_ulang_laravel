<!DOCTYPE html>
<html>
    <body>
     <!-- <img src="variabel_hands_on.png"/>    -->
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

echo"<h1> Belajar Else If</h1>";

$uangClara = 500;
$hargaSosis = 3000;
$hargaTelur = 1000;

if($uangClara >= $hargaSosis) {
    echo 'Beli Sosis Aja Sudah Kamu Clara';
} else if
    ($uangClara >= $hargaTelur) {
    echo 'Beli Telur aja sudah kamu clara';
    
} else {
    echo 'Beli yang lain aja sudah uangmu ga cukup beli dua2nya';
}

echo"<h1> Belajar Logical Operator Hands-on</h1>";

//Jika Umur Calvin sudah lebih dari 18 dan punya KTP,
//maka dia bisa menonton film joker

$umurCalvin = 20;
$punyaKTP = false;

if($umurCalvin > 18 && $punyaKTP) {
    echo'Calvin boleh menonton film Joker';
} else{
    echo'Calvin tidak boleh nonton';
}

//jika ihza menguasai javascirpt atau php 
//maka ihza bisa membuat sebuah website

$menguasaiPhp = false;
$menguasaiJavascript = true;

if($menguasaiPhp || $menguasaiJavascript){
    echo'Ihza bisa membuat website';
} else{
    echo'Ihza tidak bisa membuat website';
}

echo"<h1><br> Belajar Pengulangan</h1></br>";

for($i = 3; $i <=10; $i++){
    echo $i;
}

echo"<h1><br>belajar while& Do-while </br></h1>";

$i = 0;
while($i < 5) {
    echo 'hello';
    $i++;

}


// do {  
//     echo $i;
//     $i++;
// }while($i<4)
 

echo"<h1>Belajar Array</h1>";

$arrayNama = ["John","Doe","Mello"];
echo"<br> $arrayNama[2]</br>";
echo"<br> $arrayNama[1]</br>";
echo"<br> $arrayNama[0]</br>";

echo"<h1>Belajar Array dengan foreach</h1>";

foreach($arrayNama as $arr ){

    echo $arr."<br/>";


}


echo"<h1>Belajar Arrar CASE</h1>";
echo"<br>Andi memiliki keranjang berisi telur,daging,dan sayur,tampilkan isi keranjang andi</br>";

$keranjangAndi=["telur","daging","Sayur"];
foreach($keranjangAndi as $keranjang){
    echo $keranjang."<br>";
}

//Budi memiiki kelerang warna hitam,merah,dan emas
//tampilkan semua kelereng budi,
//ini Kelereng mahal


$kelerengAndi=["hitam","merah","emas"];
foreach($kelerengAndi as $kelereng){
    if($kelereng == "emas"){
        echo "<br>ini kelereng mahal :</br>";
    }

    echo $kelereng."<br>";
}


?>



    </body>
</html>
