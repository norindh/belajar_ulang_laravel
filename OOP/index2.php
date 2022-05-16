<!DOCTYPE html>
<html>
    <body>
        <?php

class Cat {
    public $warnaKucing;//atribute or property//
    public $jenisKucing; //atribute or porperty//
    public $warnaMata;//attribute or property//

    //constructor//
    //constructor adalah sebuah function dimana//
    //dia akan dipanggil pertama setelah pembuatan objek//
    //fungsi constructor adalah membuat beberapa objek dalam satu class//
    function __construct($warnaKucing, $jenisKucing,$warnaMata){
        $this->warnaKucing = $warnaKucing;
        $this->jenisKucing = $jenisKucing;
        $this->warnaMata = $warnaMata;
    }

    //method mengenong//
    function mengeong(){ 
    echo 'Meooooong...';    
    }   

}
//membuat object instance dari classyg berfungsi menjalankan class cat//
$cat = new Cat("hitam","kucing biasa","kuning"); 
$catAnggora = new Cat("putih","Anggora","hitam");
$catKampung = new Cat("Kuning","Kampung","coklat");


//ngeprint object//
echo'<p> Saya Punya Kucing'. $cat->warnaKucing.' dan jenisnya adalah'.$cat->jenisKucing.' dan warna matanya adalah'.$cat->warnaMata.'</p>';
echo '<p> Saya Punya Kucing'. $catAnggora->warnaKucing.' dan jenisnya adalah '.$catAnggora->jenisKucing.' dan warna matanya adalah'.$catAnggora->warnaMata.'</p>';
echo '<p> Saya Punya Kucing'. $catKampung->warnaKucing.'dan jenisnya adalah '.$catKampung->jenisKucing.' dan warna matanya adalah'.$catKampung->warnaMata.'</p>';
        ?>

    </body>
</html>