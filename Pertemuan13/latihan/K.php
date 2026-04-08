<?php
require_once "app/produk/item.php";
include "app/service/item.php";
use app\produk\item as produkItem;
use app\Service\Item as ServiceItem;

//membuat instance
$produk = new ProdukItem("Laptop");
$service = new ServiceItem("perbaikan Laptop");

//menampilkan hasil 
echo $produk->info() ."\n";
echo $produk->info();
?>