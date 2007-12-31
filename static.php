<?php 

// class ContohStatic
// public static $angka = 1;

// public static function halo() {
//    return "Hallo" . self::$angka++ . " kali ";
//  }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::Hallo();
// echo "<br>";
// echo ContohStatic::Hallo();

class Contoh {
	public static $angka = 1;

	public function Hallo() {
		return "Hallo" . self::$angka++ . " kali. <br>";
	}
}

$obj2 = new contoh;
echo $obj2->Hallo();
echo $obj2->Hallo();
echo $obj2->Hallo();
 ?>