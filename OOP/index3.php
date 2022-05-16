<!DOCTYPE html>
<html>
    <body>
        <?php
        
//buatlah objek mobil dengan attribut jenis mobil dan warna mobil//
//memiliki method menyalakan mesin//

//buatlah handphone dengan attribut//
//kualitas kamera,nama handphone,//
//dan method untuk mengambil foto//


class Mobil {

    public $jenisMobil ="avanza";
    public $warnaMobil ="Kuning Merah";

    function starter(){
        echo 'Mobil Menyala';
     }

}

$m = new Mobil();


echo '<p> Saya memiliki mobil dengan jenis'.$m->jenisMobil.'dan warna'.$m->warnaMobil.'</p>';

$m->starter();



class HP {
    public $kualitasKamera ="Bagus Sangat Bintang 5";
    public $namaHP = "XIAOMI ";

    function ambilfoto(){
        echo'Menagmbil foto';
    }
}

$hpClara = new HP();

echo $hpClara->kualitasKamera;
echo $hpClara->namaHP;

$hpClara->ambilfoto();


        ?>
    </body>
</html>