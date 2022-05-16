<!DOCTYPE html>
<html>
    <body>
        <?php

class Cat {
    public $warnaKucing = "Hitam"; //atribute or property//
    public $jenisKucing = "Persia"; //atribute or porperty//

    //method mengenong//
    function mengeong(){ 
    echo 'Meooooong...';    
    }   

}
//membuat object instance dari classyg berfungsi menjalankan class cat//
$cat = new Cat(); 

//menjalankan attribute jenis kucing di class kucing//
echo 'Saya punya kucing'.$cat->warnaKucing.'dan Jenisnya adalah'.$cat->jenisKucing;
echo $cat->jeniskucing();

//menjalankan method mengeong//
$cat->mengeong();


        ?>

    </body>
</html>