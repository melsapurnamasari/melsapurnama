<?php 

abstract class produk {
    protected $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
      
    }

  public function SetJudul( $judul ) {
  	   return $this->judul;
  }


    public function getJudul() {
       $this->penulis = $penulis;
    }

    public function setPenulis( $penulis ) {
    	$this->penulis = $penulis;
    }

    public function getPenulis() {
    	return $this->penulis;

    }
  public function setPenerbit ( $setPenerbit ) {
    $this->penerbit = $penerbit;
  }
  public function getPenerbit() {
    return $this->penerbit;
  }
  public function setDiskon( $diskon ) {
    $this->diskon = $diskon;
  }
  public function getDiskon() {
    return $this->diskon;
  }
  public function setHarga( $harga ) {
    $this->harga = $harga;
  }
  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100);
  }
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }


  abstract public function getInfo();

}