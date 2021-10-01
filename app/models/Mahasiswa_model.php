<?php 

class Mahasiswa_model {
  private $mhs = [
    [
      "nama" => "Hermawan Arby",
      "nrp" => "193040161",
      "email" => "hermawan@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Rendi Jualiansyah",
      "nrp" => "193020100",
      "email" => "rendi@gmail.com",
      "jurusan" => "Teknik Mesin"
    ],
    [
      "nama" => "Ahmad Sahroni",
      "nrp" => "194030123",
      "email" => "ahmad@gmail.com",
      "jurusan" => "Teknik Industri"
    ]
  ];

  public function getAllMahasiswa() 
  {
    return $this->mhs;
  }


}