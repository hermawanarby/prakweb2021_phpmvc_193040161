<?php 

class About {
  public function index($nama = 'Hermawan', $pekerjaan = 'Mahasiswa', $umur = 20) 
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
  }

  public function page() 
  {
    echo 'About/page';
  }
}