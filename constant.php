<?php 

// define('NAMA', 'Mellsa Purnamasari');

// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Mellsa Purnamasari';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function Coba() {
// 	return __FUNCTION__;
// }

// echo Coba();


class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>