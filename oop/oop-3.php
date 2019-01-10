<?php 

Class OrangTua {
	public $nama = 'Dewi' ;
	public $jenisKelamin = "Perempuan";

	public function setData($nm = 'Dewi Ratna', $jk = 'Perempuan'){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

	public function makan(){
		return "{$this->nama} sedang makan <br>";
	}
}

Class AnakOrang extends OrangTua {
	
	public function biodata() {
		return "Nama : {$this->nama} <br>".
			   "Jenis Kelamin : {$this->jenisKelamin} <br>".
			   "===========================================<p>";
	}
}

$anak = new AnakOrang;
$anak->setData();
echo $anak->biodata();
echo $anak->makan();