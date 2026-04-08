<?php
namespace Kendaraan;
class mobil{
    //cara menulis properly
    public $warna
    public $merk
    //cara penulisan method
    function maju(){
        //isi method maju
        return "mobil maju";
    }
    function berhenti(){
        //isi method mundur
        return "mobil Berhenti";
    }
}
// use kendaraan\Mobil;
// membuat inisial namespace
use kendaraan\mobil as Kmobil;
// inisiasi objek dari namespace alias
$mobil_ahmad = new Kmobil();
//instalasi objek
$mobil_ahmad =new mobil();
$mobil_anton =new mobil();

$mobil_ahmad-> Warna= "Hitam"();
$mobil_ahmad-> merk= "toyota"();

echo "Mobil Ahmad";
echo <br>Warna : ".$mobil_ahmad->warna";
echo <br>merk : ".$mobil_ahmad->merk";

echo $mobil_ahmad-> maju();
echo "<br>" ;
echo $mobil_ahmad->berhenti();
?>
