<?php 

class Produk {
	public $judul = "judul", 
		   $penulis = "penulis", 
		   $penerbit = "penerbit", 
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul= "Cinta Diam";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul= "Cinta Happy";
// $produk2->tambahProperty = "hihihi";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul= "Jomblo Happy";
$produk3->penulis = "Dewi Ratna";
$produk3->penerbit = "PT.PERSADA";
$produk3->harga = 25000;


$produk4 = new Produk();
$produk4->judul= "Jomblo Ngenes";
$produk4->penulis = "Dewi Ratna";
$produk4->penerbit = "PT.PERSADA";
$produk4->harga = 30000;

echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Cerita : " . $produk4->getLabel();