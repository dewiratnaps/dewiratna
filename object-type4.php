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
		return "$this->penulis, $this->penerbit";
	}
}


class CetakInfoProduk {
	public function cetak( $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Jomblo Happy", "Dewi Ratna", "PT.PERSADA", 25000);
$produk2 = new Produk("Jomblo Ngenes", "Dewi Ratna", "PT.PERSADA", 30000);

echo "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Cerita : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);



