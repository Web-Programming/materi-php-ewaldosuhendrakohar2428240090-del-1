<?php
namespace app/produk;
class item{
    public$nama;
    public function__construct($nama){
        $this->nama = $nama;
    }
    public function info(){
        return "Service: " .this->nama;
    }
}
?>