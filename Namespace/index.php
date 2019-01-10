<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Jomblo Happy", "Dewi Ratna", "PT.PERSADA", 25000, 100 );
// $produk2 = new Game("Super Mario", "Dewi Ratna", "PT.PERSADA", 300000, 50 );

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo("<br>");
new ProdukUser();