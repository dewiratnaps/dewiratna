<?php 

class Produk {
	public $judul, 
		   $penulis, 
		   $penerbit, 
		   $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->judul, $this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk("Jomblo Happy", "Dewi Ratna", "PT.PERSADA", 25000);
$produk2 = new Produk("Jomblo Ngenes", "Dewi Ratna", "PT.PERSADA", 30000);
$produk3 = new Produk("Cinta Diam");

echo "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Cerita : " . $produk2->getLabel();
echo "<br>";