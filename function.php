<!DOCTYPE html>
<html>
    <body>
    <?php


echo"<br>ini function getBudiItem</br>";
// function getBudiItem(){
//     $barangBudi = ["baju","boneka","hp"];
//     foreach($barangBudi as $barang){
//         echo $barang."<br>";
//     }
// }
// function deleteArray(){
//     $barangBudi = ["baju","boneka","hp"];
//     unset($barangBudi[0]);
//     foreach($barangBudi as $barang){
//         echo $barang."<br>";
//     }
// }

// getBudiItem();
// deleteArray();


function getBudiItem($barangBudi){
    foreach($barangBudi as $barang){
        echo $barang."<br>";
        }
}

function deleteArray(){
    $barangBudi = ["Robot","Kelereng","Handphone"];
    unset($barangBudi[2]);
    getBudiItem($barangBudi);
}

deleteArray();

function getInteger(){
    return 3;
}

function getInteger2(){
    return 2;
}


echo getInteger() + getInteger2();
    ?>
    </body>