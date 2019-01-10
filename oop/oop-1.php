<?php 

Class Orang {
	public $nama = 'Dewi' ;
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';
	}
}

$saya = new Orang;
$saya->nama = 'Ratna';
echo $saya->makan();

$saya->nama = 'Pramita';
echo $saya->makan();