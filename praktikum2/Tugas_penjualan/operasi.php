<?php
error_reporting(E_ALL ^ E_WARNING||E_NOTICE);
$nama = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "TV"){
    $jumlah_harga = 4200000 * $jumlah;
} elseif($produk == "KULKAS"){
    $jumlah_harga = 3000000 * $jumlah;
} elseif($produk == "MESIN CUCI"){
    $jumlah_harga = 3800000 * $jumlah;
}else{

}
?>